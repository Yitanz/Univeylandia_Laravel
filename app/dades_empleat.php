<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dades_empleat extends Model
{
    //
    protected $table = 'dades_empleats';

    protected $fillable = [
        'titol',
        'descripcio',
        'prioritat',
        'id_estat',
        'id_usuari_client',
        'id_usuari_empleat'
    ];
}
