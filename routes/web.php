<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => config('backpack.base.route_prefix', 'admin'), 'middleware' => ['web', 'auth']], function () {
    CRUD::resource('product', 'Admin\ProductCrudController');
    CRUD::resource('bus', 'Admin\BusCrudController');
    CRUD::resource('tickets', 'Admin\TicketsCrudController');
    CRUD::resource('route', 'Admin\RouteCrudController');
    CRUD::resource('feedback', 'Admin\FeedbackCrudController');
   	CRUD::resource('customer', 'Admin\CustomerCrudController'); 
   
});