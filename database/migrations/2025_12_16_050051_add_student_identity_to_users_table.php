<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::table('users', function (Blueprint $table) {

        // JANGAN TAMBAH LAGI kalau sudah ada
        if (!Schema::hasColumn('users', 'jenjang_sekolah')) {
            $table->string('jenjang_sekolah')->nullable()->after('nisn');
        }

        if (!Schema::hasColumn('users', 'asal_sekolah')) {
            $table->string('asal_sekolah')->nullable()->after('kelas');
        }
    });
}


    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'jenjang_sekolah',
                'asal_sekolah',
            ]);
        });
    }
};
