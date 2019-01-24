<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    protected $table = 'incidencies';

    protected $fillable = [
        'titol',
        'descripcio',
        'prioritat',
        'id_estat',
        'id_usuari_client',
        'id_usuari_empleat'
    ];
}
