<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengalaman extends Model
{
    protected $table='data_pengalaman';
    protected $primaryKey='id_pengalaman';
    public $incrementing =true;
    public $timestamps=true;
  
      protected $fillable = [
        'user_id','id_pendidikan','id_pengalaman','id_bidang_profesi','id_profesional','created_at','updated_at',
      ];
}
