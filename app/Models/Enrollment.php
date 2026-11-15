<?php

namespace App\Models;

use Database\Factories\EnrollmentFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'first_name',
    'middle_name',
    'last_name',
    'nif',
    'date_of_birth',
    'phone',
    'email',
    'course',
    'identity_card_path',
    'secondary_certificate_path',
    'application_date',
    'status',
])]
class Enrollment extends Model
{
    public const COURSES = [
        'informatica-gestao' => 'Informática de Gestão',
        'informatica-sistemas-multimedia' => 'Informática e Sistemas Multimédia',
        'eletronica-telecomunicacoes' => 'Eletrónica e Telecomunicações',
    ];

    /** @use HasFactory<EnrollmentFactory> */
    use HasFactory;

    protected function casts(): array
    {
        return [
            'date_of_birth' => 'date',
            'application_date' => 'date',
        ];
    }
}
