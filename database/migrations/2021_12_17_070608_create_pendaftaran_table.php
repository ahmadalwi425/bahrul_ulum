<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->string('pendaftaran_no_kk', 20);
            $table->string('pendaftaran_nisn', 20);
            $table->string('pendaftaran_no_kip', 100)->nullable();
            $table->string('pendaftaran_nama', 100);
            $table->string('pendaftaran_jenis_kelamin', 20);
            $table->string('pendaftaran_tempat_lahir', 50);
            $table->date('pendaftaran_tanggal_lahir');
            $table->string('pendaftaran_alamat', 100);
            $table->string('pendaftaran_kelurahan', 50);
            $table->string('pendaftaran_provinsi', 50);
            $table->string('pendaftaran_kota', 50);
            $table->string('pendaftaran_kecamatan', 50);
            $table->string('pendaftaran_kode_pos', 10);
            $table->string('pendaftaran_agama', 50);
            $table->string('pendaftaran_no_hp', 15);
            $table->string('pendaftaran_anak_ke', 2);
            $table->string('pendaftaran_jumlah_saudara', 2);
            $table->string('pendaftaran_status_tempat_tinggal', 15);
            $table->string('pendaftaran_pembiaya', 15);
            $table->string('pendaftaran_kewarganegaraan', 15);
            $table->string('pendaftaran_kebutuhan_khusus', 15);
            $table->string('pendaftaran_kebutuhan_disabilitas', 15);
            $table->string('pendaftaran_kepala_keluarga', 50);
            $table->string('pendaftaran_pernah_paud', 15);
            $table->string('pendaftaran_pernah_tk', 15);   
            $table->string('pendaftaran_jarak_tempuh', 15);
            $table->string('pendaftaran_waktu_tempuh', 15);
            $table->string('pendaftaran_cita_cita', 20);
            $table->string('pendaftaran_hobi', 20);
            $table->string('pendaftaran_media_sosial', 25);
            $table->string('pendaftaran_status', 25)->default('diminta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftaran');
    }
}
