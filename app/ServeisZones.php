<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServeisZones extends Model
{
  protected $table = 'serveis_zones';

  protected $fillable = [
      'id_zona',
      'id_servei',
      'id_empleat'
  ];
  
}
