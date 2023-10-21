<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enemigos extends Model
{
    use HasFactory;

    protected $fillable =[
        'nombre',
        'descripcion',
        'piso',
        'vida',
    ];
}
