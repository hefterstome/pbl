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
        // Schema::create('pengajuan',function(Blueprint $table){
        //     $table->char('no_kk',16)->primary();
        //     $table->string('ktp');
        //     $table->string('kk');
        //     $table->string('surat_pendukung');
        //     $table->string('slip_gaji');
        //     $table->string('foto');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
