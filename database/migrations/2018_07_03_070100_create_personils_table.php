<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_personil', function (Blueprint $table) {
            $table->increments('id');   
            $table->integer('user_id');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->enum('jenis_kelamin',['L','P']);
            $table->string('agama',20);
            $table->string('suku_bangsa');
            $table->char('gol_darah',2);
            $table->string('alamat_sekarang');
            $table->char('telp_rumah',13);
            $table->char('no_hp',13);
            $table->string('tempat_kerja');
            $table->string('alamat_kantor');
            $table->string('alamat_tempat_praktik');
            $table->char('telp_kantor',13);
            $table->string('foto')->default('avatar.png');
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
        Schema::dropIfExists('data_personil');
    }
}
