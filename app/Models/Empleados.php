<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    use HasFactory;

    protected $table= 'Empleados';

    protected $fillable = [
        'Nombre',
        'Apellido',
        'FechaNacimiento',
        'Cargo',
        'Salario'
    ];
}
