<?php

use Illuminate\Http\Request;

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
 

//List Films 
Route::get('Films','FilmsController@index');

//List Single Film
Route::get('Films/{id}','FilmsController@show');

//create new film
Route::post('Films','FilmsController@store');


//update new film
Route::put('Films','FilmsController@store');


//delete  new film
Route::get('Films','FilmsController@destroy');
