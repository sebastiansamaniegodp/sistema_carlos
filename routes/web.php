<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\AlumnoController@index')->name('dashboard');
    Route::post('/agregaralumno', 'App\Http\Controllers\AlumnoController@store');
    Route::delete('/eliminaralumno/{id}','App\Http\Controllers\AlumnoController@destroy');
    Route::put('/editaralumno/{id}','App\Http\Controllers\AlumnoController@update');
});
