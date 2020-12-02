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

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user(); //ña flecha es para accder a la propiedad de algún objeto
});
*/


//ARTISTS
//GET
Route::get('/artists', 'ArtistController@index');
//GET by ID
Route::get('/artists/{artists}', 'ArtistController@show');
//POST
Route::post('/artists', 'ArtistController@store');
//PUT
Route::put('/artists/{artists}', 'ArtistController@update');
//DELETE
Route::delete('/artists/{artists}', 'ArtistController@delete');
