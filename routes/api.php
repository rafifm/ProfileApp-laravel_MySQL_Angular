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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('profile','App\Http\Controllers\ProfileController@tampil');
Route::post('profile','App\Http\Controllers\ProfileController@tambah');
Route::put('/profile/{id}','App\Http\Controllers\ProfileController@ubah');
Route::delete('/profile/{id}','App\Http\Controllers\ProfileController@hapus');
