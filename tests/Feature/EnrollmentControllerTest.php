<?php

namespace Tests\Feature;

use App\Models\Enrollment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class EnrollmentControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_valid_application_is_saved_with_private_documents_and_pending_status(): void
    {
        Storage::fake('local');
        $this->travelTo('2026-11-15 09:00:00');

        $application = $this->validApplicationData();
        $application['identity_card'] = UploadedFile::fake()->create('bi.pdf', 100, 'application/pdf');
        $application['secondary_certificate'] = UploadedFile::fake()->create('certificate.jpg', 100, 'image/jpeg');
        $application['status'] = 'accepted';

        $response = $this->post(route('enrollment-applications.store'), $application);

        $response->assertRedirect(route('register'));
        $response->assertSessionHas('success');
        $this->assertDatabaseHas('enrollments', [
            'first_name' => 'Ana',
            'middle_name' => 'Maria',
            'last_name' => 'Silva',
            'nif' => '1234567890',
            'course' => 'informatica-gestao',
            'status' => 'pending',
        ]);

        $enrollment = Enrollment::query()->firstOrFail();
        $this->assertSame('2026-11-15', $enrollment->application_date->toDateString());
        Storage::disk('local')->assertExists($enrollment->identity_card_path);
        Storage::disk('local')->assertExists($enrollment->secondary_certificate_path);
    }

    public function test_missing_required_application_fields_return_validation_errors(): void
    {
        $response = $this->from(route('register'))
            ->post(route('enrollment-applications.store'), []);

        $response->assertRedirect(route('register'));
        $response->assertInvalid([
            'firstName' => 'primeiro nome',
            'lastName' => 'apelido',
            'nif' => 'NIF',
            'dateOfBirth' => 'data de nascimento',
            'phone' => 'número de telefone',
            'email' => 'endereço de email',
            'course' => 'curso',
        ]);
        $this->assertDatabaseCount('enrollments', 0);
    }

    public function test_invalid_course_and_documents_are_rejected_without_storing_files(): void
    {
        Storage::fake('local');
        $application = $this->validApplicationData();
        $application['course'] = 'unlisted-course';
        $application['identity_card'] = UploadedFile::fake()->create('identity.txt', 100, 'text/plain');
        $application['secondary_certificate'] = UploadedFile::fake()->create('large-certificate.pdf', 10241, 'application/pdf');

        $response = $this->from(route('register'))
            ->post(route('enrollment-applications.store'), $application);

        $response->assertRedirect(route('register'));
        $response->assertInvalid(['course', 'identity_card', 'secondary_certificate']);
        $this->assertDatabaseCount('enrollments', 0);
        Storage::disk('local')->assertEmpty();
    }

    public function test_analytics_displays_applications_and_escapes_applicant_names(): void
    {
        Enrollment::factory()->create([
            'first_name' => '<script>alert(1)</script>',
            'middle_name' => null,
            'last_name' => 'Silva',
            'course' => 'informatica-gestao',
        ]);

        $response = $this->get(route('analytics'));

        $response->assertOk();
        $response->assertSee('&lt;script&gt;alert(1)&lt;/script&gt; Silva', false);
        $response->assertDontSee('<script>alert(1)</script>', false);
        $response->assertSee('Informática de Gestão');
    }

    public function test_analytics_shows_an_empty_state_when_no_applications_exist(): void
    {
        $response = $this->get(route('analytics'));

        $response->assertOk();
        $response->assertSee('Ainda não existem candidaturas.');
    }

    public function test_application_details_show_private_document_downloads(): void
    {
        Storage::fake('local');
        Storage::disk('local')->put('enrollment-documents/bi.pdf', 'identity document');
        Storage::disk('local')->put('enrollment-documents/certificate.pdf', 'school certificate');
        $enrollment = Enrollment::factory()->create([
            'identity_card_path' => 'enrollment-documents/bi.pdf',
            'secondary_certificate_path' => 'enrollment-documents/certificate.pdf',
        ]);

        $response = $this->get(route('enrollment-applications.show', $enrollment));

        $response->assertOk();
        $response->assertSee($enrollment->email);
        $response->assertSee(route('enrollment-applications.documents.show', [$enrollment, 'identity-card']));

        $download = $this->get(route('enrollment-applications.documents.show', [$enrollment, 'identity-card']));

        $download->assertDownload('bi.pdf');
    }

    public function test_unknown_application_document_is_not_downloadable(): void
    {
        $enrollment = Enrollment::factory()->create();

        $response = $this->get(route('enrollment-applications.documents.show', [$enrollment, 'passport']));

        $response->assertNotFound();
    }

    public function test_deleting_an_application_removes_its_documents(): void
    {
        Storage::fake('local');
        Storage::disk('local')->put('enrollment-documents/bi.pdf', 'identity document');
        Storage::disk('local')->put('enrollment-documents/certificate.pdf', 'school certificate');
        $enrollment = Enrollment::factory()->create([
            'identity_card_path' => 'enrollment-documents/bi.pdf',
            'secondary_certificate_path' => 'enrollment-documents/certificate.pdf',
        ]);

        $response = $this->delete(route('enrollment-applications.destroy', $enrollment));

        $response->assertRedirect(route('analytics'));
        $response->assertSessionHas('success');
        $this->assertDatabaseMissing('enrollments', ['id' => $enrollment->id]);
        Storage::disk('local')->assertMissing([
            'enrollment-documents/bi.pdf',
            'enrollment-documents/certificate.pdf',
        ]);
    }

    /**
     * @return array<string, mixed>
     */
    private function validApplicationData(): array
    {
        return [
            'firstName' => 'Ana',
            'middleName' => 'Maria',
            'lastName' => 'Silva',
            'nif' => '1234567890',
            'dateOfBirth' => '2000-01-01',
            'phone' => '+244 923000000',
            'email' => 'ana.silva@example.test',
            'course' => 'informatica-gestao',
        ];
    }
}
