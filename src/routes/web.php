<?php

use Illuminate\Support\Facades\Route;

/**
 *
 * @author weirui
 * @date 2021-10-14
 */
Route::group(['namespace' => 'Play\Message\Http\controllers'], function () {
    Route::get('message',"MessageController@index")->name('message');
    Route::post('message', "MessageController@save")->name('save');
});
