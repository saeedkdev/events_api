<?php

use App\Http\Controllers\Api\V1\AgendaController;
use App\Http\Controllers\Api\V1\AttendeeController;
use App\Http\Controllers\Api\V1\SessionController;
use App\Http\Controllers\Api\V1\SponsorController;
use App\Http\Controllers\Api\V1\AgendaSlotsController;

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

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function() {

    Route::apiResource('attendees', AttendeeController::class);
    Route::apiResource('sessions', SessionController::class);
    Route::apiResource('sponsors', SponsorController::class);
    Route::apiResource('agendas', AgendaController::class);
    Route::apiResource('slots', AgendaSlotsController::class);
});
