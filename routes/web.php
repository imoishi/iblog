<?php

use Illuminate\Support\Facades\Route;

//frontend
Route::get('/', 'SiteController@index')->name('frontend.index');
Route::get('/contact', 'SiteController@showContactPage')->name('frontend.contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
