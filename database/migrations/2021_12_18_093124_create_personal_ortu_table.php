<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalOrtuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_ortu', function (Blueprint $table) {
            $table->id();
            $table->string('personal_ortu_nik', 20);
            $table->string('personal_ortu_nama', 50);
            $table->string('personal_ortu_status', 20);
            $table->string('personal_ortu_tempat_lahir', 50);
            $table->date('personal_ortu_tanggal_lahir');
            $table->string('personal_ortu_pendidikan_terakhir', 20);
            $table->string('personal_ortu_pekerjaan', 40);
            $table->string('personal_ortu_no_hp', 20);
            $table->string('personal_ortu_penghasilan', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_ortu');
    }
}
