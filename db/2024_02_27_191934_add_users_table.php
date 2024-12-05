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
        Schema::table('users', function (Blueprint $table) {
            $table->text('no_hp')->nullable();
            $table->text('username')->nullable();
            $table->text('nomor')->nullable();
            $table->text('nik')->nullable();
            $table->json('wilbin')->nullable();
            $table->text('jenis_user')->nullable();
            $table->string('tahun')->nullable();
            $table->text('status_penyuluh');
            $table->text('status_pendidikan');
            $table->text('jenis_kelamin');
            $table->text('tempat_lahir');
            $table->date('tanggal_lahir')->nullable();
            $table->text('provinsi_id')->nullable();
            $table->text('kabupaten_id')->nullable();
            $table->text('bpp_id')->nullable();

            
            $table->index('provinsi_id');
            $table->index('kabupaten_id');
            $table->index('bpp_id');
            $table->index('no_hp');
            $table->index('username');
            $table->index('nomor');
            $table->index('nik');
            $table->index('status_penyuluh');
            $table->index('status_pendidikan');
            $table->index('jenis_kelamin');
            $table->index('status');
            $table->index('status_aktif');
            $table->index('jf_penyuluh_id');
            $table->index('kategori_jf_id');
            $table->index('pangkat_golongans_id');
            $table->index('status');
            $table->index('status_aktif');
            $table->index('jf_penyuluh_id');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('no_hp');
            $table->dropColumn('username');
            $table->dropColumn('nomor');
            $table->dropColumn('nik');
            $table->dropColumn('wilbin');
            $table->dropColumn('jenis_user');
            $table->dropColumn('tahun');
            $table->dropColumn('status_penyuluh');
            $table->dropColumn('status_pendidikan');
            $table->dropColumn('jenis_kelamin');
            $table->dropColumn('tempat_lahir');
            $table->dropColumn('tanggal_lahir');
            $table->dropColumn('provinsi_id');
            $table->dropColumn('kabupaten_id');
            $table->dropColumn('bpp_id');
            
        });
    }
};
