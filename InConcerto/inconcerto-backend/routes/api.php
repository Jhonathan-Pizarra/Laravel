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
    return $request->user(); //la flecha es para acceder a la propiedad de algún objeto
});
*/

//Concert-PLACES
Route::get('/places', 'PlaceController@index');
//GET by ID
Route::get('/places/{places}', 'PlaceController@show');
//POST
Route::post('/places', 'PlaceController@store');
//PUT
Route::put('/places/{places}', 'PlaceController@update');
//DELETE
Route::delete('/places/{places}', 'PlaceController@delete');

//FESTIVAL
//GET
Route::get('/festivals', 'FestivalController@index');
//GET by ID
Route::get('/festivals/{festivals}', 'FestivalController@show');
//POST
Route::post('/festivals', 'FestivalController@store');
//PUT
Route::put('/festivals/{festivals}', 'FestivalController@update');
//DELETE
Route::delete('/festivals/{festivals}', 'FestivalController@delete');


//RESOURCES
//GET
Route::get('/resources', 'ResourceController@index');
//GET by ID
Route::get('/resources/{resources}', 'ResourceController@show');
//POST
Route::post('/resources', 'ResourceController@store');
//PUT
Route::put('/resources/{resources}', 'ResourceController@update');
//DELETE
Route::delete('/resources/{resources}', 'ResourceController@delete');
//Públicas
Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');

//Privadas
Route::group(['middleware' => ['jwt.verify']], function() {

    //User o Admin
    Route::get('user', 'UserController@getAuthenticatedUser');

});
