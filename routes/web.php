<?php

use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get('/', 'HomeController@index');
Route::middleware('auth')->group(
    function () {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/get-emails', 'HomeController@getMails')->name('get-mails');
        Route::get('/thank-you', 'HomeController@thankYou')->name('thank-you');
    }
);
