<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('registrasi', function (Blueprint $table) {
            $table->id();
            $table->string('username', 100);
            $table->string('email')->unique();
            $table->string('nisn', 20)->unique();
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('jenjang');
            $table->string('sekolah');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('registrasi'); // <<< PERBAIKAN DI SINI
    }
};
