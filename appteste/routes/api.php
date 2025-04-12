<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/produtos', [ProdutoController::class, 'index']);
Route::get('/produto/{id}', [ProdutoController::class, 'show']);

Route::get('/greeting', function () {
    return 'Hello World';
});

