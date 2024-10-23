<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $connection = 'sqlsrv_1';
    use HasFactory;

    public function usuario()
    {
        return $this->hasOne(Usuario::class, 'idEmpleado');
    }

    protected $table= 'Empleados';

    protected $fillable = [
        'Nombre',
        'Apellido',
        'FechaNacimiento',
        'Cargo',
        'Salario'
    ];
}
