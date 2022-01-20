<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('siswa_no_kk', 20);
            $table->string('siswa_nisn', 20);
            $table->string('siswa_no_kip', 100)->nullable();
            $table->string('siswa_nama', 100);
            $table->string('siswa_jenis_kelamin', 20);
            $table->string('siswa_tempat_lahir', 50);
            $table->date('siswa_tanggal_lahir');
            $table->string('siswa_alamat', 100);
            $table->string('siswa_kelurahan', 50);
            $table->string('siswa_provinsi', 50);
            $table->string('siswa_kota', 50);
            $table->string('siswa_kecamatan', 50);
            $table->string('siswa_kode_pos', 10);
            $table->string('siswa_agama', 50);
            $table->string('siswa_no_hp', 15);
            $table->string('siswa_anak_ke', 2);
            $table->string('siswa_jumlah_saudara', 2);
            $table->string('siswa_status_tempat_tinggal', 15);
            $table->string('siswa_pembiaya', 15);
            $table->string('siswa_kewarganegaraan', 15);
            $table->string('siswa_kebutuhan_khusus', 15);
            $table->string('siswa_kebutuhan_disabilitas', 15);
            $table->string('siswa_kepala_keluarga', 50);
            $table->string('siswa_pernah_paud', 15);
            $table->string('siswa_pernah_tk', 15);   
            $table->string('siswa_jarak_tempuh', 15);
            $table->string('siswa_waktu_tempuh', 15);
            $table->string('siswa_cita_cita', 20);
            $table->string('siswa_hobi', 20);
            $table->string('siswa_media_sosial', 25);
            
            $table->string('data_ortu_nama_wali', 50)->nullable();
            $table->string('data_ortu_status_wali', 50)->nullable();
            $table->string('data_ortu_no_hp_wali', 50);
            $table->string('data_ortu_alamat', 100);
            $table->string('data_ortu_kelurahan', 50);
            $table->string('data_ortu_provinsi', 50);
            $table->string('data_ortu_kota', 50);
            $table->string('data_ortu_kecamatan', 50);

            $table->string('ibu_personal_ortu_nik', 20);
            $table->string('ibu_personal_ortu_nama', 50);
            $table->string('ibu_personal_ortu_status', 20);
            $table->string('ibu_personal_ortu_tempat_lahir', 50);
            $table->date('ibu_personal_ortu_tanggal_lahir');
            $table->string('ibu_personal_ortu_pendidikan_terakhir', 20);
            $table->string('ibu_personal_ortu_pekerjaan', 40);
            $table->string('ibu_personal_ortu_no_hp', 20);
            $table->string('ibu_personal_ortu_penghasilan', 10);

            $table->string('ayah_personal_ortu_nik', 20);
            $table->string('ayah_personal_ortu_nama', 50);
            $table->string('ayah_personal_ortu_status', 20);
            $table->string('ayah_personal_ortu_tempat_lahir', 50);
            $table->date('ayah_personal_ortu_tanggal_lahir');
            $table->string('ayah_personal_ortu_pendidikan_terakhir', 20);
            $table->string('ayah_personal_ortu_pekerjaan', 40);
            $table->string('ayah_personal_ortu_no_hp', 20);
            $table->string('ayah_personal_ortu_penghasilan', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
