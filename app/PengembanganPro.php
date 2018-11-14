<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengembanganPro extends Model
{
    protected $table='data_pengembangan_pro';
    protected $primaryKey='kode_pro';
    public $incrementing =false;
    public $timestamps=true;
  
      protected $fillable = [
        'kode_pro','user_id','kegiatan','tempat','tahun','created_at','updated_at','lampiran',
      ];
}
