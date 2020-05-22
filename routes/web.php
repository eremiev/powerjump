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
    return view('pages.index');
});

Route::get('/about', 'PageController@about');
Route::get('/projects', 'PageController@projects');
Route::get('/events', 'PageController@events');
Route::get('/products', 'PageController@products');
Route::get('/partners', 'PageController@partners');
Route::get('/contacts', 'PageController@contacts');


Auth::routes();

Route::group([
    'namespace' => 'Admin',
    'middleware' => 'auth',
    'prefix' => 'admin',
], function () {
    Route::resource('projects', 'ProjectController', [
        'only' => ['index', 'create', 'show', 'store', 'edit', 'update', 'destroy'],
        'as' => 'admin'
    ]);

    Route::resource('events', 'EventController', [
        'only' => ['index', 'create', 'show', 'store', 'edit', 'update', 'destroy'],
        'as' => 'admin'
    ]);

    Route::resource('partners', 'PartnerController', [
        'only' => ['index', 'create', 'show', 'store', 'edit', 'update', 'destroy'],
        'as' => 'admin'
    ]);
});