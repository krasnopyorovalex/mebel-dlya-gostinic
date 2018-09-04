<?php

Route::group(['prefix' => 'ready-solutions', 'as' => 'ready_solutions.'], function () {
    Route::pattern('id', '[0-9]+');

    Route::get('', 'ReadySolutionController@index')->name('index');
    Route::get('create', 'ReadySolutionController@create')->name('create');
    Route::post('', 'ReadySolutionController@store')->name('store');
    Route::get('{id}/edit', 'ReadySolutionController@edit')->name('edit');
    Route::put('{id}', 'ReadySolutionController@update')->name('update');
    Route::delete('{id}', 'ReadySolutionController@destroy')->name('destroy');

});