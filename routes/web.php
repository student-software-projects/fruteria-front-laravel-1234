<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\landingController;

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

Route::get('/inicio',[landingController::class,'index'])->name('landing.index');
Route::get('/acercade',[landingController::class,'acercade'])->name('landing.acercade');
Route::get('/domicilios',[landingController::class,'domicilios'])->name('landing.domicilios');
Route::get('/contacto',[landingController::class,'contacto'])->name('landing.contacto');
