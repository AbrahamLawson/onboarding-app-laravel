<?php

use App\Http\Controllers\GetVoicesController;
use App\Http\Controllers\VoiceoverController;
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
Route::get('voices', [GetVoicesController::class, 'index']);
Route::get('voices/locale', [GetVoicesController::class, 'locale']);

