<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();

            // Informasi utama lowongan
            $table->string('title'); // Judul pekerjaan
            $table->string('company_name'); // Nama perusahaan
            $table->string('location'); // Lokasi kerja
            $table->enum('job_type', ['Full Time', 'Part Time', 'Freelance', 'Internship']);
            $table->string('salary')->nullable(); // Gaji (opsional)

            // Detail pekerjaan
            $table->text('description'); // Deskripsi pekerjaan
            $table->text('requirements'); // Syarat pekerjaan
            $table->text('responsibilities')->nullable(); // Tugas (opsional)

            // Status
            $table->boolean('is_active')->default(true);
            $table->date('deadline')->nullable(); // Batas lamaran

            // Relasi (opsional, kalau nanti ada user / admin)
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
