<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    protected $table='data_pekerjaan';
    protected $primaryKey='kode_pekerjaan';
    public $incrementing =false;
    public $timestamps=true;
  
      protected $fillable = [
        'kode_pekerjaan','user_id','nama_lembaga','alamat','no_telp','pekerjaan','dari','sampai','created_at','updated_at','lampiran',
      ];
}
