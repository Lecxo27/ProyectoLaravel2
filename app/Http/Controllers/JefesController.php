<?php

namespace App\Http\Controllers;

use App\Http\Requests\JefesPostRequest;
use App\Models\Jefes;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class JefesController extends Controller
{
    public function index(){
        $jefes=Jefes::all();
        return response()->json($jefes, Response::HTTP_OK);
       } 
       public function store(JefesPostRequest $request){
        $jefes = Jefes::create($request->all());
        return response()->json([
            'message'=>"Objetos creado en la base de datos correctamente",
            'objeto'=>$jefes
        ], Response::HTTP_CREATED);
       }
}
