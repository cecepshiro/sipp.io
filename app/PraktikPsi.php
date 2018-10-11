<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PraktikPsi extends Model
{
    protected $table='data_praktik';
    protected $primaryKey='kode_praktik';
    public $incrementing =false;
    public $timestamps=true;
  
      protected $fillable = [
        'kode_praktik','user_id','pemeriksaan','tindakan','tahunpelaksanaan','created_at','updated_at',
      ];
}
