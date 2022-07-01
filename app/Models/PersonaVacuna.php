<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PersonaVacuna extends Pivot
{
    use HasFactory;
    protected $table = 'persona_vacuna';
    protected $fillable =
    [
        'dosis',
        'persona_id',
        'vacuna_id',
        'fecha',
        'laboratorio',
        'lote',
    ];
    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }

    public function vacuna()
    {
        return $this->belongsTo(Vacuna::class);
    }
}
