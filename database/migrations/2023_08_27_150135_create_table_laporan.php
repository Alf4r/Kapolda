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
        Schema::create('table_laporan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nik');
            $table->string('korban');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('email');
            $table->string('kewarganegaraan');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->string('alamat_lengkap');
            $table->string('lokasi_kejadian');
            $table->string('jenis_kejahatan');
            $table->string('kerugian');
            $table->date('tanggal_kejadian');
            $table->string('waktu_kejadian');
            $table->string('detail_motif');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('kode_pos');
            $table->string('nama_ibu');
            $table->string('nama_bapak');
            $table->string('pekerjaan_ibu');
            $table->string('pekerjaan_bapak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_laporan');
    }
};
