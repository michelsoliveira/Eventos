<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $fillable = ['nome', 'email', 'usuario', 'senha', 'id_grupo'];

    public function Grupo()
    {
        return $this->hasOne('app\Grupo','id_grupo','id_grupo');
    }


}
