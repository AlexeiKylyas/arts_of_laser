<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin/login', 'AdminController@showLoginForm')->name('admin.login');
Route::post('/authenticate', 'AdminController@authenticate')->name('admin.authenticate');

Route::group(['middleware' => 'auth:admins'], function () {

    Route::get('/admin/categories/create', 'Admin\CategoryController@create')->name('admin.categories.create');
    Route::post('/admin/categories/store', 'Admin\CategoryController@store')->name('admin.categories.store');
});
