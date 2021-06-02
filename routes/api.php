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

Route::group(['namespace' => ''], function() {

    //Authentication
    // Route::post('/users/login', 'App\Http\Controllers\AuthController@login');
    // Route::post('/users/register', 'App\Http\Controllers\AuthController@register');

    Route::resource('/employees', 'App\Http\Controllers\EmployeeController');
    Route::resource('/positions', 'App\Http\Controllers\PositionController');
    Route::resource('/gis', 'App\Http\Controllers\GeolocationController');

    // Route::resource('/surveys', 'App\Http\Controllers\SurveyController');
            

});