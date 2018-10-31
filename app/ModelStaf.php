<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelStaf extends Model
{
    protected $table = 'staf';
    protected $fillable = [
        'nama_staf',
        'nama_seksyen',
        'nama_unit'
      ];
}
