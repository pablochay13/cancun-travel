<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SendEmailController;

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
    return view('index');
});

// sitio general
Route::get('/contacto', [PageController::class, 'Contacto']);
Route::get('/somos', [PageController::class, 'Somos']);
Route::get('/tours', [PageController::class, 'Tours']);
Route::get('/gracias', [PageController::class, 'Gracias']);

// landings
Route::get('/tulum-ultimate-tour', [PageController::class, 'TulumTour']);
Route::get('/chichen-itza-experience-tour', [PageController::class, 'ChichenTour']);
Route::get('/traslados', [PageController::class, 'Traslados']);
Route::get('/aventura', [PageController::class, 'Aventura']);
Route::get('/barcos-experiencias-acuaticas', [PageController::class, 'BarcosAgua']);
Route::get('/combos', [PageController::class, 'Combos']);
Route::get('/turismo-cultura', [PageController::class, 'TurismoCultura']);
Route::get('/experiencias-privadas', [PageController::class, 'ExperienciasPrivadas']);
Route::get('/comidas-y-bebidas', [PageController::class, 'ComidaBebida']);
Route::get('/fiesta-y-vida-nocturna', [PageController::class, 'FiestaVidaNocturna']);
Route::get('/parques-tematicos', [PageController::class, 'ParqueTematico']);

//envio mail
Route::get('/sendemail', [SendEmailController::class, 'enviarcorreo']);
Route::post('/sendemail/send', [SendEmailController::class, 'send']);