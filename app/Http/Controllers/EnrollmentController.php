<?php

namespace App\Http\Controllers;

use App\Mail\EnrollmentAcceptedMail;
use App\Models\Enrollment;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use RuntimeException;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

class EnrollmentController extends Controller
{
    public function index(): View
    {
        $enrollments = Enrollment::query()
            ->latest('application_date')
            ->latest('id')
            ->get();

        return view('admin.dashboard.analytics.index', compact('enrollments'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'firstName' => ['required', 'string', 'max:100'],
            'middleName' => ['nullable', 'string', 'max:100'],
            'lastName' => ['required', 'string', 'max:100'],
            'nif' => ['required', 'string', 'max:30'],
            'dateOfBirth' => ['required', 'date'],
            'phone' => ['required', 'string', 'max:30'],
            'email' => ['required', 'email', 'max:255'],
            'course' => ['required', Rule::in(array_keys(Enrollment::COURSES))],
            'identity_card' => ['nullable', 'file', 'mimes:pdf,jpg,jpeg,png', 'extensions:pdf,jpg,jpeg,png', 'max:10240'],
            'secondary_certificate' => ['nullable', 'file', 'mimes:pdf,jpg,jpeg,png', 'extensions:pdf,jpg,jpeg,png', 'max:10240'],
        ], [], [
            'firstName' => 'primeiro nome',
            'middleName' => 'nome do meio',
            'lastName' => 'apelido',
            'nif' => 'NIF',
            'dateOfBirth' => 'data de nascimento',
            'phone' => 'número de telefone',
            'email' => 'endereço de email',
            'course' => 'curso',
            'identity_card' => 'bilhete de identidade',
            'secondary_certificate' => 'certificado do ensino secundário',
        ]);

        $storedPaths = [];
        $applicationCreated = false;

        try {
            $identityCardPath = $request->file('identity_card')?->store('enrollment-documents', 'local');

            if ($identityCardPath === false) {
                throw new RuntimeException('Unable to store the uploaded identity document.');
            }

            if ($identityCardPath !== null) {
                $storedPaths[] = $identityCardPath;
            }

            $secondaryCertificatePath = $request->file('secondary_certificate')?->store('enrollment-documents', 'local');

            if ($secondaryCertificatePath === false) {
                throw new RuntimeException('Unable to store the uploaded school certificate.');
            }

            if ($secondaryCertificatePath !== null) {
                $storedPaths[] = $secondaryCertificatePath;
            }

            Enrollment::create([
                'first_name' => $validated['firstName'],
                'middle_name' => $validated['middleName'] ?? null,
                'last_name' => $validated['lastName'],
                'nif' => $validated['nif'],
                'date_of_birth' => $validated['dateOfBirth'],
                'phone' => $validated['phone'],
                'email' => $validated['email'],
                'course' => $validated['course'],
                'identity_card_path' => $identityCardPath,
                'secondary_certificate_path' => $secondaryCertificatePath,
                'application_date' => today(),
                'status' => 'pending',
            ]);

            $applicationCreated = true;
        } finally {
            if (! $applicationCreated && $storedPaths !== [] && ! Storage::disk('local')->delete($storedPaths)) {
                throw new RuntimeException('Unable to remove uploaded documents after the application failed.');
            }
        }

        return redirect()
            ->route('register')
            ->with('success', 'A sua candidatura foi submetida com sucesso.');
    }

    public function show(Enrollment $enrollment): View
    {
        return view('admin.dashboard.enrollment-applications.show', compact('enrollment'));
    }

    public function accept(Enrollment $enrollment): RedirectResponse
    {
        try {
            // Roll back the status change if synchronous email delivery fails.
            DB::transaction(function () use ($enrollment): void {
                $enrollment->updateOrFail(['status' => 'accepted']);

                Mail::to($enrollment->email)->send(new EnrollmentAcceptedMail($enrollment));
            });
        } catch (QueryException|TransportExceptionInterface $exception) {
            report($exception);

            return redirect()
                ->route('analytics')
                ->with('error', 'Não foi possível aceitar a inscrição. Tente novamente.');
        }

        return redirect()
            ->route('analytics')
            ->with('success', 'A inscrição foi aceite com sucesso.');
    }

    public function document(Enrollment $enrollment, string $document): StreamedResponse
    {
        $path = match ($document) {
            'identity-card' => $enrollment->identity_card_path,
            'secondary-certificate' => $enrollment->secondary_certificate_path,
            default => null,
        };

        abort_if($path === null, 404);

        return Storage::disk('local')->download($path);
    }

    public function destroy(Enrollment $enrollment): RedirectResponse
    {
        $documentPaths = array_values(array_filter([
            $enrollment->identity_card_path,
            $enrollment->secondary_certificate_path,
        ]));

        $enrollment->deleteOrFail();

        if ($documentPaths !== [] && ! Storage::disk('local')->delete($documentPaths)) {
            throw new RuntimeException('The application was deleted, but its documents could not be removed.');
        }

        return redirect()
            ->route('analytics')
            ->with('success', 'A candidatura foi eliminada com sucesso.');
    }
}
