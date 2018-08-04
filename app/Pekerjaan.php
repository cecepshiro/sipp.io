<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    protected $table='data_pekerjaan';
    protected $primaryKey='kode_pekerjaan';
    public $incrementing =true;
    public $timestamps=true;
  
      protected $fillable = [
        'nama_lembaga','alamat','no_telp','pekerjaan','dari','sampai','created_at','updated_at',
      ];
}
