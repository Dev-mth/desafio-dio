<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimesController;

/*
Route::get('hello/{name}', function($name) {
    return "hello" . $name;
});
*/

//Route::get('hello-post/{name}',[HelloWorldController::class, 'hello']);

Route::get('times', [TimesController::class, 'getAll']);
Route::post('times/store', [TimesController::class, 'store']);
Route::get('times/estado/{estado}', [TimesController::class, 'getTimesByEstado']);
Route::get('times/{id}', [TimesController::class, 'getById']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
