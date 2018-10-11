<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BidangProfesi extends Model
{
    protected $table='data_bidangprofesi';
    protected $primaryKey='kode_bidangprofesi';
    public $incrementing =false;
    public $timestamps=true;
  
      protected $fillable = [
        'kode_bidangprofesi','bidangprofesi','created_at','updated_at',
      ];
}
