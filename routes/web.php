<?php

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
    return view('welcome');
});

//Ruta para asignar rutina a vehículo
    Route::post('/{vehicle}/addRoutine', 'VehicleController@addRoutine')->name('addRoutine');

//Ruta para ver rutinas
    Route::get('/scheduleRoutines', 'scheduleController@index')->name('schedules');
