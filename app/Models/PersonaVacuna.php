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

}
