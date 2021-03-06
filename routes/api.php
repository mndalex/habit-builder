<?php

use App\Http\Controllers\GoalController;
use App\Http\Controllers\HabitController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'v1'], function () {

    Route::group(['middleware' => ['auth:sanctum']], function () {
        Route::apiResource('goals', GoalController::class)->only(['index', 'store', 'update']);

        Route::apiResource('habits', HabitController::class);
    });
});
