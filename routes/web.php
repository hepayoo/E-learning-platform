<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\Front\HomepageController@index')->name('front.Homepage');
