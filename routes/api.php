<?php

use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\MatriculaRepresentanteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('matriculas', MatriculaController::class)->only(['show'])->where(['matricula' => '[0-9]{10}']);
Route::apiResource('matriculas.representantes', MatriculaRepresentanteController::class)->only(['index'])->where(['matricula' => '[0-9]{10}']);
