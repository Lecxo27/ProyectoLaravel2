<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrinketsRequest;
use App\Models\Trinkets;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TrinketsController extends Controller
{
    public function index(){
        $Trinkets=Trinkets::all();
        return response()->json($Trinkets, Response::HTTP_OK);
       } 
       public function store(TrinketsRequest $request){
        $Trinkets=Trinkets::create($request->all());
        return response()->json([
            'message'=>"Objetos creado en la base de datos correctamente",
            'objeto'=>$Trinkets
        ], Response::HTTP_CREATED);
       }
}
