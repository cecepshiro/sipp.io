<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personil extends Model
{
    protected $table='data_personil';
    protected $primaryKey='kode_personil';
    public $incrementing =true;
    public $timestamps=true;
  
      protected $fillable = [
        'user_id','pangkat','tempat_lahir','tgl_lahir','jenis_kelamin','agama','suku_bangsa','gol_darah','alamat_sekarang',
        'telp_rumah','no_hp','tempat_kerja','alamat_kantor','alamat_tempat_praktik','telp_kantor','foto','created_at','updated_at',
      ];
}
