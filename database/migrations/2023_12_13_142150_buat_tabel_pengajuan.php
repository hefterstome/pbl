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
            $table->char('no_kk');
            $table->string('verifikator');
            $table->string('nik');
            $table->string('nama');
            $table->string('email');
            $table->string('alamat');
            $table->string('pekerjaan');
            $table->integer('pendapatan');
            $table->integer('luas_bangunan');
            $table->integer('jumlah_kendaraan');
            $table->integer('jumlah_tanggungan_anak');
            $table->integer('listrik_rumah');
            $table->string('status');
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
