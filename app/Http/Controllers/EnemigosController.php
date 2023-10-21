<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnemigosRequest;
use App\Models\Enemigos;
use Illuminate\Http\Response;


class EnemigosController extends Controller
{
    public function index(){
        $Enemigos=Enemigos::all();
        return response()->json($Enemigos, Response::HTTP_OK);
       } 
       public function store(EnemigosRequest $request){
        $Enemigos=Enemigos::create($request->all());
        return response()->json([
            'message'=>"Objetos creado en la base de datos correctamente",
            'objeto'=>$Enemigos
        ], Response::HTTP_CREATED);
       }
}
