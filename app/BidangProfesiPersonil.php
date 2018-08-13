<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BidangProfesiPersonil extends Model
{
    protected $table='data_bidangpropers';
    protected $primaryKey='kode_bidangpropers';
    public $incrementing =true;
    public $timestamps=true;
  
      protected $fillable = [
        'user_id','kode_bidangprofesi','created_at','updated_at',
      ];
}
