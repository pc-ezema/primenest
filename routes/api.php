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

Route::group([
 'prefix' => 'v1'
], function ($router){

    Route::any('/property_fetch' , 'PropertyController@fetch');
    Route::any('/property_create' , 'PropertyController@create');
    Route::any('/property_update' , 'PropertyController@update');
    Route::any('/property_delete' , 'PropertyController@delete');

});
