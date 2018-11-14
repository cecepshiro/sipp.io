<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    protected $table='data_pendidikan';
    protected $primaryKey='kode_pendidikan';
    public $incrementing =false;
    public $timestamps=true;
  
      protected $fillable = [
        'kode_pendidikan','user_id','kode_jenjang','nama_pt','kota','bidang_ilmu','tahun_lulus','created_at','updated_at','lampiran',
      ];

}
