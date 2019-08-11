<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfil';
    public $timestamps= false;
    protected $fillable = [
        'email','nombre','apellido','telefono','tipo','niveleducacion','necesidad','edad','sexo','tallacamisa','decidisteparticipar','estarinformadocomunidad','estarinformadoboletin',
    ];
}
