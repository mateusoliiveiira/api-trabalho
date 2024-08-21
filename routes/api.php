<?php

use App\Http\Controllers\SportController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::Get('/minhas-informacoes', function(){
    return response()->json([
        'Nome' => 'Mateus Oliveira ',
        'RM' => '2411'
        
    ]);
});
Route::apiResource('/sports', SportController::class);

?>

