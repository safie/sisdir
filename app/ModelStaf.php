<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelStaf extends Model
{
    protected $table = 'staf';
    protected $fillable = [
        'nama_staf',
        'no_kp',
        'nama_jawatan',
        'gred_jawatan',
        'id_unit',
        'id_seksyen'
      ];
}
