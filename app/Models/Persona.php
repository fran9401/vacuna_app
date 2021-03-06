<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'personas';
    protected $fillable =
               [
                 'nombre',
                 'apellido',
                 'fecha_nacimiento',
                 'cedula',
                 'barrio',
                 'ciudad',
                 'pais',
                 'sexo',
               ];

    //Relaciones
    public function vacunas()
    {
        return $this->hasMany(PersonaVacuna::class);
    }


}
