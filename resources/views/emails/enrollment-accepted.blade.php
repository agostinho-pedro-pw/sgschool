Olá {{ implode(' ', array_filter([$enrollment->first_name, $enrollment->middle_name, $enrollment->last_name])) }},

Temos o prazer de informar que a sua candidatura ao curso de
{{ \App\Models\Enrollment::COURSES[$enrollment->course] ?? $enrollment->course }} foi aceite.

Com os melhores cumprimentos,
sgSchool
