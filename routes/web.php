<?php

use Illuminate\Support\Facades\Route;

//frontend
Route::get('/', 'SiteController@index')->name('frontend.index');
Route::get('/contact', 'SiteController@showContactPage')->name('frontend.contact');
Route::get('/about', 'SiteController@showAboutPage')->name('frontend.about');
Route::get('/services', 'SiteController@showServicesPage')->name('frontend.services');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
