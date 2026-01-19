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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            // Informasi utama perusahaan
            $table->string('name'); // Nama perusahaan
            $table->string('email')->unique()->nullable();
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            // Profil perusahaan
            $table->text('about')->nullable(); // Tentang perusahaan
            $table->string('industry')->nullable(); // Bidang usaha
            $table->integer('employees_count')->nullable(); // Jumlah karyawan
            // Lokasi
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->string('country')->default('Indonesia');
            // Media
            $table->string('logo')->nullable(); // Logo perusahaan
            // Status
            $table->boolean('is_verified')->default(false);
            $table->boolean('is_active')->default(true);
            // Relasi ke user/admin (pemilik perusahaan)
            $table->foreignId('user_id')->nullable() ->constrained() ->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
