<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('surat_izin', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('siswa_id');
    $table->date('tanggal_izin');
    $table->string('alasan');
    $table->text('keterangan')->nullable();
    $table->string('bukti')->nullable();
    $table->enum('status', ['menunggu', 'disetujui', 'ditolak'])->default('menunggu');
    $table->timestamps();
});

    }

    public function down(): void
    {
        Schema::dropIfExists('surat_izins');
    }
};
