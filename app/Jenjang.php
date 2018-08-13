<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenjang extends Model
{
    protected $table='data_jenjang';
    protected $primaryKey='kode_jenjang';
    public $incrementing =true;
    public $timestamps=true;
  
      protected $fillable = [
        'kode_jenjang','jenjang','keterangan','created_at','updated_at',
      ];

      public function pendidikan()
      {
        return $this->hasMany('App\Pendidikan','kode_jenjang', 'kode_jenjang');
      }
}
