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
    return view('welcome');
});

Route::get('/formulariomaquinas', 'App\Http\Controllers\MachineController@formMachine')->name('formulariomaquinas');
Route::post('/formulariomaquinas', 'App\Http\Controllers\MachineController@formMachineSubmit')->name('formulariomaquinas');
Route::get('/statusmaquinas', 'App\Http\Controllers\MachineController@getStatus');
Route::post('/generarinformacion', 'App\Http\Controllers\MachineController@generateInfo')->name('generarinformacion');
