<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Front\HomepageController;
use App\Http\Controllers\Front\CourseController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AuthController;


Route::get('/', 'App\Http\Controllers\Front\HomepageController@index')->name('front.Homepage');

Route::get('/cat/{id}', 'App\Http\Controllers\Front\CourseController@cat')->name('front.cat');
Route::get('/cat/{id}/course/{c_id}', 'App\Http\Controllers\Front\CourseController@show')->name('front.show');
Route::post('/message/enroll', [MessageController::class, 'enroll'])->name('front.message.enroll');




    Route::get('/dashboard/login', 'App\Http\Controllers\Admin\AuthController@login')->name('admin.login');
    Route::post('/dashboard/do-login', 'App\Http\Controllers\Admin\AuthController@doLogin')->name('admin.doLogin');


    
    Route::get('/dashboard/logout', 'App\Http\Controllers\Admin\AuthController@logout')->name('admin.logout');

    Route::get('/dashboard', 'App\Http\Controllers\Admin\HomeController@index')->name('admin.Home');








