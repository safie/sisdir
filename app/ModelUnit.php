<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelUnit extends Model
{
    //
    protected $table = 'unit';
    protected $fillable = [
        'nama_unit',
        'id_seksyen'
      ];
    
    public function ModelUnit()
      {
          return $this->belongsTo('App\ModelSeksyen');
      }
}