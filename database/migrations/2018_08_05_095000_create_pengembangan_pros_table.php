<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengembanganProsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pengembangan_pro', function (Blueprint $table) {
            $table->increments('kode_pro');
            $table->integer('user_id');
            $table->string('kegiatan');
            $table->string('tempat');
            $table->char('tahun',4);
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
        Schema::dropIfExists('data_pengembangan_pro');
    }
}
