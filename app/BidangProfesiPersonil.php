<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BidangProfesiPersonil extends Model
{
    protected $table='data_bidangpropers';
    protected $primaryKey='kode_bidangpropers';
    public $incrementing =false;
    public $timestamps=true;
  
      protected $fillable = [
        'kode_bidangpropers','user_id','kode_bidangprofesi','created_at','updated_at','lampiran',
      ];
}
