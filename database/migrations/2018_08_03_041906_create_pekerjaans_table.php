<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePekerjaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pekerjaan', function (Blueprint $table) {
            $table->increments('kode_pekerjaan');
            $table->string('nama_lembaga');
            $table->string('alamat');
            $table->char('no_telp',13);
            $table->string('pekerjaan');
            $table->date('dari');
            $table->date('sampai');
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
        Schema::dropIfExists('data_pekerjaan');
    }
}
