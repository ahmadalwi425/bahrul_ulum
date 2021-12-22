<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendidikanSebelumnyaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendidikan_sebelumnya', function (Blueprint $table) {
            $table->id();
            $table->string('pendidikan_sebelumnya_nama_sekolah', 30);
            $table->string('pendidikan_sebelumnya_alamat_sekolah', 50);
            $table->string('pendidikan_sebelumnya_mengaji', 10);
            $table->string('pendidikan_sebelumnya_asal_tpq', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendidikan_sebelumnya');
    }
}
