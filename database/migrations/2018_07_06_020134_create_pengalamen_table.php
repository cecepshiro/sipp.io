<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengalamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pengalaman', function (Blueprint $table) {
            $table->increments('id_riwayat');
            $table->char('user_id',15);
            $table->char('id_pendidikan',5);
            $table->char('id_pekerjaan',5);
            $table->char('id_pengalaman',5);
            $table->char('id_bidang_profesi',5);
            $table->char('id_profesional',5);
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
        Schema::dropIfExists('data_pengalaman');
    }
}
