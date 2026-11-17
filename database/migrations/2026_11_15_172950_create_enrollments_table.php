<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->string('fullName', 302);
            $table->date('dateOfBirth');
            $table->string('phone', 30);
            $table->string('email');
            $table->string('gender', 20);
            $table->string('course');
            $table->date('applicationDate');
            $table->string('status')->default('pending');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
