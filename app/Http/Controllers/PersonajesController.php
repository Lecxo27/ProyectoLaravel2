<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonajesRequest;
use App\Models\Personajes;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class PersonajesController extends Controller
{
    public function index(){
        $Personajes=Personajes::all();
        return response()->json($Personajes, Response::HTTP_OK);
       } 
       public function store(PersonajesRequest $request){
        $Personajes=Personajes::create($request->all());
        return response()->json([
            'message'=>"Objetos creado en la base de datos correctamente",
            'objeto'=>$Personajes
        ], Response::HTTP_CREATED);
       }
}
