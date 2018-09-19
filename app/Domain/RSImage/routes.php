<?php

Route::group(['prefix' => 'rs-images', 'as' => 'rs_images.'], function () {
    Route::pattern('id', '[0-9]+');
    Route::pattern('rs', '[0-9]+');

    Route::get('{rs}', 'RSImageController@index')->name('index');
    Route::post('{rs}', 'RSImageController@store')->name('store');
    Route::get('{id}/edit', 'RSImageController@edit')->name('edit');
    Route::put('{id}', 'RSImageController@update')->name('update');
    Route::delete('{id}', 'RSImageController@destroy')->name('destroy');

    Route::post('update-positions', 'RSImageController@updatePositions')->name('update_positions');
});