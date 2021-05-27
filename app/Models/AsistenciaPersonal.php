<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsistenciaPersonal extends Model
{
    use HasFactory;
    protected $table = "asistencia_personal";
    protected $fillable = [
        'persona_id',
        'fecha_ingreso',
        'fecha_salida',
    ];

    public function persona(){
        return $this->belongsTo(Personal::class);
    }

    /*peronas->habilidad
    nombre
    porcentaje
    orden
    */
}
