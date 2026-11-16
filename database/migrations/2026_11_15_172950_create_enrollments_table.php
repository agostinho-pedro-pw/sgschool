<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnrollmentController extends Controller
{
    // Lista as inscrições
    public function index()
    {
        $enrollments = Enrollment::orderBy('applicationDate', 'desc')
            ->orderBy('id', 'desc')
            ->get();

        return view('admin.dashboard.enrollments.index', compact('enrollments'));
    }

    // Guarda uma nova inscrição
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fullName' => 'required|string|max:302',
            'dateOfBirth' => 'required|date',
            'phone' => 'required|string|max:30',
            'email' => 'required|email|max:255',
            'gender' => 'required|in:Masculino,Feminino,Outro',
            'course' => 'required|in:' . implode(',', array_keys(Enrollment::COURSES)),
        ]);

        Enrollment::create([
            'fullName' => $validated['fullName'],
            'dateOfBirth' => $validated['dateOfBirth'],
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'gender' => $validated['gender'],
            'course' => $validated['course'],
            'applicationDate' => today(),
            'status' => 'pending',
        ]);

        return redirect()
            ->route('register')
            ->with('success', 'A sua candidatura foi submetida com sucesso.');
    }

    // Mostra os dados de uma inscrição
    public function show(Enrollment $enrollment)
    {
        return view('admin.dashboard.enrollment-applications.show', compact('enrollment'));
    }

    // Aceita a inscrição e envia o e-mail
    public function accept(Enrollment $enrollment)
    {
        $enrollment->update([
            'status' => 'accepted',
        ]);

        Mail::send('emails.enrollment-accepted', [
            'enrollment' => $enrollment,
        ], function ($message) use ($enrollment) {
            $message->to($enrollment->email)
                ->subject('Candidatura aceite');
        });

        return redirect()
            ->route('analytics')
            ->with('success', 'A inscrição foi aceite com sucesso.');
    }

    // Elimina uma inscrição
    public function destroy(Enrollment $enrollment)
    {
        $enrollment->delete();

        return redirect()
            ->route('analytics')
            ->with('success', 'A candidatura foi eliminada com sucesso.');
    }
}
