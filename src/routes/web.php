<?php

Route::group(['namespace' => 'Crazycoderscafe\C3mail\Http\Controllers'], function () {
    Route::get('send-mail', 'SendMailController@index');
    Route::post('send-mail', 'SendMailController@send');
});
