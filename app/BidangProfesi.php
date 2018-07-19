<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BidangProfesi extends Model
{
    protected $table='data_bidangprofesi';
    protected $primaryKey='kode_bidangprofesi';
    public $incrementing =true;
    public $timestamps=true;
  
      protected $fillable = [
        'bidangprofesi','created_at','updated_at',
      ];
}
