<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', function () {
    return view('login');
});
Route::post('/', 'HomeController@postLogin');

Route::get('/purchases', 'PurchaseController@getPurchases');
Route::post('/purchases', 'PurchaseController@postPurchases');

Route::get('/purchases/list', 'PurchaseController@showPurchases');

Route::get('/offerings', 'OfferingController@getOfferings');
