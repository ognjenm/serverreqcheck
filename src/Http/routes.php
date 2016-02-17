<?php

Route::get('servicestatus', ['before'=>'basicAuth','as'=>'servicestatus','uses'=>'ognjenm\serverreqcheck\Http\Controllers\StatusController@index']);

Route::any('shell', ['before'=>'basicAuth','as'=>'shell','uses'=>'ognjenm\serverreqcheck\Http\Controllers\StatusController@shell']);

Route::any('dbmanager', ['before'=>'basicAuth','as'=>'dbmanager','uses'=>'ognjenm\serverreqcheck\Http\Controllers\StatusController@adminer']);
Route::any('dbmanagereditor', ['before'=>'basicAuth','as'=>'dbmanagereditor','uses'=>'ognjenm\serverreqcheck\Http\Controllers\StatusController@adminerEditor']);



Route::get('serverinfopanel', ['before'=>'basicAuth','as'=>'serverinfopanel','uses'=>'ognjenm\serverreqcheck\Http\Controllers\StatusController@serverinfopanel']);
Route::get('serverinfo', ['before'=>'basicAuth','uses'=>'ognjenm\serverreqcheck\Http\Controllers\StatusController@serverinfo']);