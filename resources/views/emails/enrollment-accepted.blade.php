<p>Olá {{ $enrollment->fullName }},</p>

<p>
    A sua candidatura para o curso
    <strong>{{ \App\Models\Enrollment::COURSES[$enrollment->course] ?? $enrollment->course }}</strong>
    foi aceite.
</p>

<p>Com os melhores cumprimentos,<br>sgSchool</p>
