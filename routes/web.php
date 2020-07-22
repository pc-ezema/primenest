<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/' , 'homepageController@index');
Route::get("/about-us" , "homepageController@aboutUs");
Route::get("/property" , "homepageController@property");
Route::get("/property-detail" , "homepageController@propertyDetail");
Route::get("/faq" , "homepageController@faq");
Route::get("/contact-us" , "homepageController@contactUs");
Route::get("/application" , "homepageController@application");



Route::post("/contact-us" , "homepageController@contactusConfirm");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
