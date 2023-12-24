<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/contacto', [PageController::class, 'Contacto']);
Route::get('/somos', [PageController::class, 'Somos']);
Route::get('/tours', [PageController::class, 'Tours']);
Route::get('/tulum-ultimate-tour', [PageController::class, 'TulumTour']);