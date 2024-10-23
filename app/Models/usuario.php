<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;
    public function empleado()
    {
        return $this->belongsTo(Empleados::class, 'idEmpleado');
    }

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'idRol');
    }
}
