<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PersonaVacuna extends Pivot
{

    protected $table = 'persona_vacuna';
    protected $fillable =
               [
                 'dosis',
                 'persona_id',
                 'vacuna_id',
                 'laboratorio',
                 'lote',
               ];

}
