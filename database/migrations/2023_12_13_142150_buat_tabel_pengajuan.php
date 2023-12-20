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
        Schema::create('pengajuan',function(Blueprint $table){
            $table->char('no_kk',16)->primary();
            $table->char('verifikator',18);
            $table->char('nik',16)->unique();
            $table->string('nama');
            $table->string('email');
            $table->string('alamat');
            $table->string('pekerjaan');
            $table->integer('pendapatan');
            $table->integer('luas_bangunan');
            $table->integer('jumlah_kendaraan');
            $table->integer('jumlah_tanggungan_anak');
            $table->integer('listrik_rumah');
            $table->enum('status',['diterima','ditolak','sedang diproses'])->default('sedang diproses');
            $table->string('ktp');
            $table->string('kk');
            $table->string('surat_pendukung');
            $table->string('slip_gaji');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
