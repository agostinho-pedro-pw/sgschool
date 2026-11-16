<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('enrollments', function (Blueprint $table) {
            // phone já existe; adiciona os restantes campos do formulário.
            $table->string('fullName', 302)->nullable();
            $table->string('gender')->nullable();
            $table->date('applicationDate')->nullable();
            $table->renameColumn('date_of_birth', 'dateOfBirth');

            // Mantém os registos antigos, permitindo campos legados vazios.
            $table->string('first_name', 100)->nullable()->change();
            $table->string('last_name', 100)->nullable()->change();
            $table->string('nif', 30)->nullable()->change();
            $table->date('application_date')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // A reversão apagaria dados guardados nos novos campos.
        throw new LogicException('Esta migração não pode ser revertida sem perda de dados.');
    }
};
