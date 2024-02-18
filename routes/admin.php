<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', 'AdminController@showLoginForm')->name('admin.login');
Route::post('/authenticate', 'AdminController@authenticate')->name('admin.authenticate');

Route::get('/admin/categories/create', 'Admin\CategoryController@create')->name('admin.categories.create');
Route::post('/admin/categories/store', 'Admin\CategoryController@store')->name('admin.categories.store');
