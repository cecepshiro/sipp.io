<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendidikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pendidikan', function (Blueprint $table) {
            $table->increments('kode_pendidikan');
            $table->integer('user_id');
            $table->char('kode_jenjang',5);
            $table->string('nama_pt');
            $table->string('kota');
            $table->string('bidang_ilmu');
            $table->char('tahun_lulus',4);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_pendidikan');
    }
}
