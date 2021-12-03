<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table="actividad";
    protected $primaryKey="IdActividad";
    public $timestamps = false;
    use HasFactory;

    public function obra(){
        return $this->hasMany('App\Models\Obra');
    }

    public function usuarios (){
        return $this->belongsToMany('App\Models\Usuario');
    }
}
