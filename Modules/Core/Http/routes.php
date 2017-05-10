<?php


Route::get('/logmein', function () {
    return view('auth.logmein');
});


Route::group(['middleware' => 'auth', 'prefix' => 'core', 'namespace' => 'Modules\Core\Http\Controllers'], function()
{
    Route::get('/', 'CoreController@index');
});


