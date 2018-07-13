<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personil extends Model
{
    protected $table='data_personil';
    protected $primaryKey='id';
    public $incrementing =true;
    public $timestamps=true;
  
      protected $fillable = [
        'user_id','tempat_lahir','tgl_lahir','jenis_kelamin','kode_agama','alamat_sekarang',
        'telp_rumah','no_hp','tempat_kerja','alamat_kantor','alamat_tempat_praktik','telp_kantor','foto','created_at','updated_at',
      ];
}
