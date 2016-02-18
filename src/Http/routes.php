<?php

#Service status
Route::get('servicestatus', ['before'=>Config::get('serverreqcheck::authfilter'),'as'=>'servicestatus','uses'=>'ognjenm\serverreqcheck\Http\Controllers\StatusController@index']);
#shell
Route::any('shell', ['before'=>Config::get('serverreqcheck::authfilter'),'as'=>'shell','uses'=>'ognjenm\serverreqcheck\Http\Controllers\StatusController@shell']);
# DB manager
Route::any('dbmanager', ['before'=>Config::get('serverreqcheck::authfilter'),'as'=>'dbmanager','uses'=>'ognjenm\serverreqcheck\Http\Controllers\StatusController@adminer']);
Route::any('dbmanagereditor', ['as'=>'dbmanagereditor','uses'=>'ognjenm\serverreqcheck\Http\Controllers\StatusController@adminerEditor']);

#server panel
Route::get('serverinfopanel', ['before'=>Config::get('serverreqcheck::authfilter'),'as'=>'serverinfopanel','uses'=>'ognjenm\serverreqcheck\Http\Controllers\StatusController@serverinfopanel']);
Route::get('serverinfo', ['before'=>Config::get('serverreqcheck::authfilter'),'uses'=>'ognjenm\serverreqcheck\Http\Controllers\StatusController@serverinfo']);