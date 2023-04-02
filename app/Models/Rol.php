<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $guarded= [];

    protected $casts = [
        'Administrator' => 'boolean',
        'Medico' => 'boolean',
        'Paciente' => 'boolean'
    ];

}
