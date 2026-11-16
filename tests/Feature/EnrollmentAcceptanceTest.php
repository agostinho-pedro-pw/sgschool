<?php

namespace Tests\Feature;

use App\Mail\EnrollmentAcceptedMail;
use App\Models\Enrollment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mailer\Exception\TransportException;
use Tests\TestCase;

class EnrollmentAcceptanceTest extends TestCase
{
    use RefreshDatabase;

    public function test_accepting_an_application_updates_its_status_sends_email_and_returns_to_analytics(): void
    {
        Mail::fake();
        $enrollment = Enrollment::factory()->create([
            'first_name' => 'Ana',
            'middle_name' => 'Maria',
            'last_name' => 'Silva',
        ]);

        $response = $this->post(route('enrollment-applications.accept', $enrollment));

        $response->assertRedirect(route('analytics'));
        $response->assertSessionHas('success', 'A inscrição foi aceite com sucesso.');
        $this->assertDatabaseHas('enrollments', [
            'id' => $enrollment->id,
            'status' => 'accepted',
        ]);

        $analyticsResponse = $this->get(route('analytics'));

        $analyticsResponse->assertOk();
        $analyticsResponse->assertSee('alert alert-success', false);
        $analyticsResponse->assertSee('A inscrição foi aceite com sucesso.');

        Mail::assertSent(EnrollmentAcceptedMail::class, function (EnrollmentAcceptedMail $mail) use ($enrollment): bool {
            $mail->assertSeeInText('Ana Maria Silva');

            return $mail->hasTo($enrollment->email);
        });
    }

    public function test_email_failure_keeps_the_application_pending_and_reports_an_error(): void
    {
        $enrollment = Enrollment::factory()->create();
        Mail::shouldReceive('to')
            ->once()
            ->with($enrollment->email)
            ->andThrow(new TransportException('Mail transport failed.'));

        $response = $this->post(route('enrollment-applications.accept', $enrollment));

        $response->assertRedirect(route('analytics'));
        $response->assertSessionHas('error', 'Não foi possível aceitar a inscrição. Tente novamente.');
        $this->assertDatabaseHas('enrollments', [
            'id' => $enrollment->id,
            'status' => 'pending',
        ]);
    }

    public function test_analytics_renders_the_accept_action_with_the_applicant_name(): void
    {
        $enrollment = Enrollment::factory()->create([
            'first_name' => 'Ana',
            'middle_name' => 'Maria',
            'last_name' => 'Silva',
        ]);

        $response = $this->get(route('analytics'));

        $response->assertOk();
        $response->assertSee(route('enrollment-applications.accept', $enrollment), false);
    }
}
