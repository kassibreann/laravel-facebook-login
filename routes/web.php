<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/facebook-login', 'FacebookAuthController@redirectToProvider');
Route::get('/callback', 'FacebookAuthController@handleProviderCallback');

Route::get('/home', 'HomeController@index')->name('home');
