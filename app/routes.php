<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(array('domain' => '{dname}.get.uniuid.com'), function()
{
    Route::get('{pagepath}', 'GetController@contentReturn');
    // Route::get('{pagepath}', 'GetController@contentReturn');
    // Route::get('{pagepath}', 'GetController@contentReturn');

});

Route::get('/', function()
{
    return View::make('hello');
});