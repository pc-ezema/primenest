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


    Route::any('/faq_fetch' , 'FaqController@fetch');
    Route::any('/faq_create' , 'FaqController@create');
    Route::any('/faq_update' , 'FaqController@update');
    Route::any('/faq_delete' , 'FaqController@delete');
    Route::any('/faq_export' , 'FaqController@exportable');

    Route::any('/contact_fetch' , 'ContactController@fetch');
    Route::any('/contact_update' , 'ContactController@update');
    Route::any('/contact_delete' , 'ContactController@delete');
    Route::any('/contact_export' , 'ContactController@exportable');

    Route::any('/application_fetch' , 'ApplicationController@fetch');
    Route::any('/application_update' , 'ApplicationController@update');
    Route::any('/application_delete' , 'ApplicationController@delete');
    Route::any('/application_export' , 'ApplicationController@exportable');


});
