<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    protected $table="obra";
    protected $primaryKey="IdObra";
    public $timestamps = false;
    use HasFactory;

    public function actividades(){
        return $this->belongsTo('App\Models\Actividad');
    }
}
