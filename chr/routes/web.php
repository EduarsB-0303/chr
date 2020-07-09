<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('interfaces01');
});
Route::resource('camioneros','CamioneroController');
Route::resource('camiones','CamionController');
Route::resource('carnets','CarnetController');
Route::resource('licencias','LicenciaController');
Route::resource('remuneraciones','RemuneracionController');
Route::resource('viajes','ViajeController');
Route::resource('viaticos','ViaticoController');