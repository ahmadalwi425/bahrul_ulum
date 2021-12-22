<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataOrtuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_ortu', function (Blueprint $table) {
            $table->id();
            $table->string('data_ortu_nama_wali', 50)->nullable();
            $table->string('data_ortu_status_wali', 50)->nullable();
            $table->string('data_ortu_no_hp_wali', 50);
            $table->string('data_ortu_alamat', 100);
            $table->string('data_ortu_kelurahan', 50);
            $table->string('data_ortu_provinsi', 50);
            $table->string('data_ortu_kota', 50);
            $table->string('data_ortu_kecamatan', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_ortu');
    }
}
