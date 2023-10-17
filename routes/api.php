<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

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
    Route::get('/get-ips-list', [ChartController::class, 'findAllIps']);
    Route::get('/user', [UserController::class, 'getCredentials']);
    Route::post('/decrypt', 'CryptoController@decrypt');
    Route::get('/auth/{userId}', [LoginController::class, 'getAuth']);
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/get-ips-small-detail-list', [ChartController::class, 'findAllIpsDetail']);
});
