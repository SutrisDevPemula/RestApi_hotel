<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'hotel'], function () {
    Route::get('/', 'HotelController@index'); 
    Route::get('/{id}', 'HotelController@show'); 
    Route::post('/', 'HotelController@store'); 
    Route::put('/{id}', 'HotelController@update'); 
    Route::delete('/{id}', 'HotelController@delete'); 
});
