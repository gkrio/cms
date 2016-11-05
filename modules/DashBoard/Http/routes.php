<?php

Route::group(['middleware' => 'web', 'prefix' => 'dashboard', 'namespace' => 'Modules\DashBoard\Http\Controllers'], function () {
    Route::get('/', 'DashBoardController@index');
});
Route::group([
    'middleware' => 'web',
    'prefix' => 'admin',
    'namespace' => 'Modules\DashBoard\Http\Controllers\Backend'
], function () {
    Route::get('/','IndexController@index');
});