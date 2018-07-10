<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    protected $table='data_agama';
    protected $primaryKey='id';
    public $incrementing =true;
    public $timestamps=true;
  
      protected $fillable = [
        'agama',
      ];
}
