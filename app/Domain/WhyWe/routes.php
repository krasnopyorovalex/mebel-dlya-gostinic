<?php

Route::group(['prefix' => 'why-wes', 'as' => 'why_wes.'], function () {
    Route::pattern('id', '[0-9]+');

    Route::get('', 'WhyWeController@index')->name('index');
    Route::get('create', 'WhyWeController@create')->name('create');
    Route::post('', 'WhyWeController@store')->name('store');
    Route::get('{id}/edit', 'WhyWeController@edit')->name('edit');
    Route::put('{id}', 'WhyWeController@update')->name('update');
    Route::delete('{id}', 'WhyWeController@destroy')->name('destroy');

});