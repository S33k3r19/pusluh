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
        Schema::create('t_penyuluh', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('provinsi_id');
            $table->unsignedBigInteger('kabupaten_id')->nullable();
            $table->unsignedBigInteger('bpp_id')->nullable();
            $table->text('nomor')->unique();
            $table->text('nama')->nullable();
            $table->text('nik')->unique();
            $table->text('email')->unique();
            $table->text('no_hp')->nullable();
            $table->text('status_penyuluh')->nullable();
            $table->text('status_pendidikan')->nullable();
            $table->text('jenis_kelamin')->nullable();
            $table->text('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->json('wilbin')->nullable();
            $table->boolean('status')->default(false);
            $table->text('status_aktif')->nullable();
            $table->string('tahun')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penyuluh');
    }
};
