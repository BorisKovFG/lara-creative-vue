<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Person', 'prefix' => 'people'], function () {
    Route::post('/', 'StoreController')->name('store.person');
    Route::get('/', 'IndexController')->name('index.person');
    Route::patch('/{person}', 'UpdateController')->name('update.person');
    Route::delete('/{person}', 'DestroyController')->name('destroy.person');
});
