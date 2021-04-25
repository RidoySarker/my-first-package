<?php


use Illuminate\Http\Request;

Route::group(['namespace' => 'Ridoy\Student\Http\Controllers'], function (){
    Route::get('student','StudentController@index');

    Route::post('student','StudentController@store')->name('student');
});


