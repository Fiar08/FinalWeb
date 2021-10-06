<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\NewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MsiTypeController;
use App\Http\Controllers\acerController;
use App\Http\Controllers\asusController;
use App\Http\Controllers\dellController;
use App\Http\Controllers\appleController;
use App\Http\Controllers\lenovoController;
use App\Http\Controllers\xiaomiController;
use App\Http\Controllers\hpController;
use App\Http\Controllers\toshibaController;
use App\Http\Controllers\razerController;
use App\Http\Controllers\gigabyteController;
use App\Http\Controllers\microsoftController;





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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function(){
    Route::prefix('auth')->group(function(){
        Route::post('register', [AuthController::class, 'register']);
        Route::post('login', [AuthController::class, 'login']);
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('refresh', [AuthController::class, 'refresh']);
        Route::post('me', [AuthController::class, 'me']);
    });

    Route::middleware('jwt.verify')->group(function(){
        Route::apiResource('news', NewsController::class, [
            'as' => 'api'
        ]);  
    });

    Route::middleware('jwt.verify')->group(function(){
        Route::apiResource('MsiType', MsiTypeController::class, [
            'as' => 'api'
        ]);  
    });

    Route::middleware('jwt.verify')->group(function(){
        Route::apiResource('Acer', acerController::class, [
            'as' => 'api'
        ]);  
    });

    Route::middleware('jwt.verify')->group(function(){
        Route::apiResource('Asus', asusController::class, [
            'as' => 'api'
        ]);  
    });

    Route::middleware('jwt.verify')->group(function(){
        Route::apiResource('Dell', dellController::class, [
            'as' => 'api'
        ]);  
    });

    Route::middleware('jwt.verify')->group(function(){
        Route::apiResource('Apple', appleController::class, [
            'as' => 'api'
        ]);  
    });

    Route::middleware('jwt.verify')->group(function(){
        Route::apiResource('Lenovo', lenovoController::class, [
            'as' => 'api'
        ]);  
    });

    Route::middleware('jwt.verify')->group(function(){
        Route::apiResource('Xiaomi', lenovoController::class, [
            'as' => 'api'
        ]);  
    });

    Route::middleware('jwt.verify')->group(function(){
        Route::apiResource('Hp', hpController::class, [
            'as' => 'api'
        ]);  
    });

    Route::middleware('jwt.verify')->group(function(){
        Route::apiResource('Toshiba', toshibaController::class, [
            'as' => 'api'
        ]);  
    });

    Route::middleware('jwt.verify')->group(function(){
        Route::apiResource('Razer', razerController::class, [
            'as' => 'api'
        ]);  
    });

    Route::middleware('jwt.verify')->group(function(){
        Route::apiResource('Gigabyte', gigabyteController::class, [
            'as' => 'api'
        ]);  
    });

    Route::middleware('jwt.verify')->group(function(){
        Route::apiResource('Microsoft', microsoftController::class, [
            'as' => 'api'
        ]);  
    });
});