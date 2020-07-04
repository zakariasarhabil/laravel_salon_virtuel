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

Route::post('/login', 'AuthController@login');
Route::post('/register', 'AuthController@register');
Route::get('/user/{id}', 'AuthController@getuser');
Route::post('/logout', 'AuthController@logout')->middleware('auth:sanctum');



Route::apiResource('/stand','StandController');

Route::apiResource('/reseau','ReseauController');

Route::apiResource('/video','VideoController');

Route::apiResource('/galerie','GalerieController');

Route::apiResource('/temoignage','TemoignageController');

Route::apiResource('/document','DocumentController');

Route::apiResource('/lien','LienExController');

Route::apiResource('/theme','ThemeController');

Route::apiResource('/espace','EspaceExposantController');

// Route::apiResource('/exposant','ExposantController');

Route::apiResource('/event', 'EventController');







// Route::get('/reseau','ReseauController@index');

