<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table="usuario";
    protected $primaryKey="IdUsuario";
    public $timestamps = false;
    use HasFactory;

    public function actividades (){
        return $this->belongsToMany('App\Models\Actividad');
    }
}
