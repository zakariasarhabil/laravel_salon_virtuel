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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::get('/stand','StandController@index');
// Route::get('/stand/{id}','StandController@show');
// Route::post('/stand/create','StandController@store');
// Route::put('/stand/{id}','StandController@update');
// Route::delete('/stand/{id}','StandController@destroy');
Route::apiResource('/stand','StandController');

Route::apiResource('/reseau','ReseauController');

Route::apiResource('/video','VideoController');

Route::apiResource('/galerie','GalerieController');

Route::apiResource('/temoignage','TemoignageController');

Route::apiResource('/document','DocumentController');

Route::apiResource('/lien','LienExController');

Route::apiResource('/theme','ThemeController');

Route::apiResource('/espace','EspaceExposantController');

Route::apiResource('/exposant','ExposantController');

Route::apiResource('/event', 'EventController');







// Route::get('/reseau','ReseauController@index');

