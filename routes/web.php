<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\Front\HomepageController@index')->name('front.Homepage');

Route::get('/cat/{id}/course/{c_id}', 'App\Http\Controllers\Front\CourseController@cat')->name('front.cat');
Route::get('/cat/{id}/course/{c_id}', 'App\Http\Controllers\Front\CourseController@show')->name('front.show');

