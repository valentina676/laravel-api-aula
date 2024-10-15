<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'message' => 'OK'
    ]);
});

Route::get('/somar', function(Request $request){
    if (count($request->all())<1){
        return response()->json([
            'menssage' => 'Não há valor para somar'
        ], 406);
    }
    
   $soma = array_sum($request->all());
   return response()->json([
    'message' => 'Uhuull somado com sucesso', //opcional
    'sum' => $soma,
   ]);
});