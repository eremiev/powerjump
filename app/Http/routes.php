<?php


Route::get('/', function () {

    View::addExtension('html', 'php');
    return View::make('index');
});


/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/
Route::group([
    'prefix' => 'api',
    'namespace' => 'Api\{version}',
    'middleware' => ['api.version', 'language', 'paginate']
], function () {
    Route::post('auth', 'AuthJwtController@authenticate');


    Route::post('token-refresh', [
        'middleware' => 'jwt.refresh',
        'uses' => 'AuthJwtController@refresh'
    ]);


    /*
    |--------------------------------------------------------------------------
    | API Auth routes
    |--------------------------------------------------------------------------
    */
//    Route::group(['middleware' => 'jwt.auth'], function () {
    Route::resource('roles', 'RolesController', [
        'only' => ['index', 'show', 'store', 'update', 'destroy']
    ]);

    Route::resource('members', 'MembersController', [
        'only' => ['index', 'show', 'store', 'update', 'destroy']
    ]);


    Route::resource('administrators', 'AdministratorsController', [
        'only' => ['index', 'show', 'store', 'update', 'destroy']
    ]);

    Route::resource('events', 'EventsController', [
        'only' => ['index', 'show', 'store', 'update', 'destroy']
    ]);

    Route::resource('projects', 'ProjectsController', [
        'only' => ['index', 'show', 'store', 'update', 'destroy']
    ]);

//    });
});


