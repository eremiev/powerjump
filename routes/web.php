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

use App\Http\Controllers\PageController;


Route::get('/', 'PageController@home');
//Route::get('/about', 'PageController@about');
Route::get('/experiences', 'PageController@experiences');
Route::get('/experiences/{category}', 'PageController@experience');
Route::get('/events', 'PageController@events');
Route::get('/products', 'PageController@products');
Route::get('/partners', 'PageController@partners');
Route::get('/contacts', 'PageController@contacts');


Auth::routes();


Route::get('/projects/{id}', [PageController::class, 'showProjects'])->name('projects.show');

Route::get('/events/{id}', [PageController::class, 'showEvents'])->name('events.show');

Route::group([
    'namespace' => 'Admin',
    'middleware' => 'auth',
    'prefix' => 'admin',
], function () {

    Route::get('/', 'ProjectController@index');

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