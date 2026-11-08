<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nome_completo', 120);
            $table->string('numero_documento', 30)->unique();
            $table->string('telefone', 30)->nullable();
            $table->date('data_nascimento')->nullable();
            $table->timestamps();
        });

        Schema::create('grade_levels', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 60);
            $table->string('nivel', 40);
            $table->timestamps();
            $table->unique(['nome', 'nivel']);
        });

        Schema::create('school_years', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 20)->unique();
            $table->date('data_inicio');
            $table->date('data_fim');
            $table->timestamps();
        });

        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->unsignedSmallInteger('capacidade');
            $table->timestamps();
        });

        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('nome_completo', 120);
            $table->string('telefone', 30)->nullable();
            $table->string('email', 120)->nullable()->unique();
            $table->string('especialidade', 100)->nullable();
            $table->timestamps();
        });

        /*
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('classe_id')->constrained('grade_levels')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->string('nome', 100);
            $table->string('abreviacao', 20);
            $table->timestamps();
            $table->unique(['abreviacao', 'classe_id']);
        });

        Schema::create('class_groups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('classe_id')->constrained('grade_levels')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('ano_letivo_id')->constrained('school_years')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('sala_id')->constrained('rooms')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->string('nome', 60);
            $table->string('turno', 30);
            $table->timestamps();
            $table->unique(['ano_letivo_id', 'nome']);
        });

        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('aluno_id')->constrained('students')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('turma_id')->constrained('class_groups')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->date('data_matricula');
            $table->timestamps();
        });

        Schema::create('class_subjects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('turma_id')->constrained('class_groups')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('disciplina_id')->constrained('subjects')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('professor_id')->constrained('teachers')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamps();
            $table->unique(['turma_id', 'disciplina_id']);
        });

        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('matricula_id')->constrained('enrollments')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->string('tipo_pagamento', 40);
            $table->decimal('valor', 10, 2);
            $table->date('data_pagamento')->nullable();
            $table->timestamps();
        });

        Schema::create('assessments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('matricula_id')->constrained('enrollments')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('disciplina_turma_id')->constrained('class_subjects')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->decimal('nota', 5, 2);
            $table->timestamps();
        });
        */
    }

    public function down(): void
    {
        /*
        Schema::dropIfExists('assessments');
        Schema::dropIfExists('payments');
        Schema::dropIfExists('class_subjects');
        Schema::dropIfExists('enrollments');
        Schema::dropIfExists('class_groups');
        Schema::dropIfExists('subjects');
        */
        Schema::dropIfExists('teachers');
        Schema::dropIfExists('rooms');
        Schema::dropIfExists('school_years');
        Schema::dropIfExists('grade_levels');
        Schema::dropIfExists('students');
    }
};
