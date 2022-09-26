<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Form;
use App\Http\Controllers\SesionController;

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


Route::get('/',  [[Form::class, 'home']]);

// Route::get('/lp', [Form::class, 'landing']);

ROUTE::post('/formulario' , [Form::class, 'recibirForm']);

ROUTE::resource('sesion', SesionController::class);