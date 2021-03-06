<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
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
    return view('auth.login');
});




// aca muestra por defecto nuestro archivo welcome.blade.php


/*Route::get('/empleados', function () {
    return view('empleados.index');
});

Route::get('empleados/create',[EmpleadoController::class,'create']);*/

Route::resource('empleados',EmpleadoController::class);  //  con esto puedo acceder a todas las rutas
Auth::routes();


Route::get('/home', [EmpleadoController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'],function(){


    Route::get('/', [ EmpleadoController::class, 'index'])->name('home');


});
