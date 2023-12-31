<?php

use App\Http\Controllers\GetVoicesController;
use App\Http\Controllers\ParamController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\VoiceoverController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('voices ', [GetVoicesController::class, 'insertionVoices']);
Route::resource('voiceovers', VoiceoverController::class)->only([
    'destroy', 'index', 'store', 'show',
]);
Route::resource('project', ProjectController::class)->only([
	'destroy', 'index', 'store', 'show', 'update',
]);
Route::resource('project.param', ParamController::class)->only([
	'destroy', 'index', 'store', 'show', 'update',
]);