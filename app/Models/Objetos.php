<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objetos extends Model
{
    use HasFactory;
    protected $fillable =[
        'ItemID',
        'nombre',
        'descripcion',
    ];

    public function getDescriptionAttributes($value){
        return substr($value, 1, 120);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
