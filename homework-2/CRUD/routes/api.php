<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("getInfo", [DeviceController::class, 'getInfo']);

Route::get("getF1Teams", [DeviceController::class, 'getF1Teams']);

Route::get("getConstructorChamphion", [DeviceController::class, 'getConstructorChamphion']);

Route::get("getChampion", [DeviceController::class, 'getChampion']);

Route::get("getBestPrincipal", [DeviceController::class, 'getBestPrincipal']);

Route::post("add", [DeviceController::class, 'add']);

Route::put("update", [DeviceController::class, 'update']);

Route::delete("delete", [DeviceController::class, 'delete']);