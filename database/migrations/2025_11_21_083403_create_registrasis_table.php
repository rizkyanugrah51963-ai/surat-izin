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
        Schema::create('registrasi', function (Blueprint $table) {
            $table->id();

            // Kolom sesuai form
            $table->string('username', 100);
            $table->string('email')->unique();
            $table->string('nisn', 20)->unique();

            // Dropdown wilayah
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');

            // Dropdown sekolah
            $table->string('jenjang');
            $table->string('sekolah');

            // Default Laravel timestamp
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrasis');
    }
};
