<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $fillable = [
        'fullName',
        'dateOfBirth',
        'phone',
        'email',
        'gender',
        'course',
        'applicationDate',
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
            'dateOfBirth' => 'date',
            'applicationDate' => 'date',
        ];
    }
}
