<?php

use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

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
    return view('index');
});


Route::get('/contacto', function () {
    
   
    return view('contacto');
});



 Route::get('/contacto', function () {
    return view('contacto');
}); //Esta ruta la ponemos en la raiz para que nada mas ejecutar nuestra aplicación aparezca nuestro formulario

Route::post('/contactar', 'ContactController@contact')->name('contact');
//Ruta que esta señalando nuestro formulario