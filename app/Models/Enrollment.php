<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $fillable = [
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
    ];

    public const COURSES = [
        'informatica-gestao' => 'Informática de Gestão',
        'informatica-sistemas-multimedia' => 'Informática e Sistemas Multimédia',
        'eletronica-telecomunicacoes' => 'Eletrónica e Telecomunicações',
    ];

    protected function casts(): array
    {
        return [
            'date_of_birth' => 'date',
            'application_date' => 'date',
        ];
    }
}
