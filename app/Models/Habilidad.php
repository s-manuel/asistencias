<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habilidad extends Model
{
    use HasFactory;
    protected $table = "habilidades";
    protected $fillable=[
        'nombre',
        'porcentaje',
        'orden',
        'persona_id'
    ];

    public function persona(){
        return $this->belongsTo(Persona::class);
    }
}
