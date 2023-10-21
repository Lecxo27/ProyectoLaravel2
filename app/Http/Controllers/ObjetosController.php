<?php

namespace App\Http\Controllers;

use App\Http\Requests\ObjetoPostRequest;
use App\Models\Objetos;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ObjetosController extends Controller
{
   public function index(){
    $objetos=Objetos::all();
    return response()->json($objetos, Response::HTTP_OK);
   } 
   public function store(ObjetoPostRequest $request){
    $objeto = Objetos::create($request->all());
    return response()->json([
        'message'=>"Objetos creado en la base de datos correctamente",
        'objeto'=>$objeto
    ], Response::HTTP_CREATED);
   }

}
