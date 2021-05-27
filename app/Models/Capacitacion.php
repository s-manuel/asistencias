<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capacitacion extends Model
{
    use HasFactory;
    protected $table = "capacitaciones";
    protected $fillable = [
        'persona_id',
        'fecha',
        'nombre',
        'horas',
        'lugar',
        'intitucion',
    ];

    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }
}
