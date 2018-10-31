<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelSeksyen extends Model
{
    //
    protected $table = 'seksyen';
    protected $fillable = [
        'nama_seksyen',
        'singkatan_seksyen',
        'alamat_seksyen'
      ];

      public function ModelSeksyen()
      {
          return $this->hasMany('App\ModelUnit');
      }

}
