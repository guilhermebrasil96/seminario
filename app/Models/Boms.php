<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boms extends Model
{
    use HasFactory;

    protected $table = 'boms';

    protected $fillable = [
        'id',
        'codigo',
        'usuario',
        'nombre',
        'apellidos',
        'sexo',
        'birthday',
        'correo',
        'dpi',
        'telefono1',
        'telefono2',
        'password'
    ];

}
