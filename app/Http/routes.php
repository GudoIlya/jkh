<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
 * Это приложение предназначено только для тех пользователей, который зарегистрированы
 * главная страница доступна только для авторизованных пользователей
 * Значит, если пользователь не авторизован - перенаправляем его на страницу login, если авторизован показываем ему главную
 */
Route::auth();

Route::get('/', 'HomeController@index');

// User
Route::get('/user/profile', 'User\UserController@index')->name('userProfileIndex');
Route::post('/user/profile', 'User\UserController@saveUser');
Route::get('/user/changepassword', 'User\UserController@changePasswordIndex')->name('changePasswordIndex');
Route::post('/user/changepassword', 'User\UserController@changePassword');
