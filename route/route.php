<?php

include_once(__DIR__ . '/RouteClass.php');

Route::add("/", "homeController@homeAction");
Route::add("/login", "authController@loginAction");
Route::add("/register", "authController@registerAction");
Route::add("/logout", "authController@logoutAction");
Route::add("/settings", "settingsController@settingsAction");
Route::add("/changePasswordView", "settingsController@changePasswordViewAction");
Route::add("/changePassword", "settingsController@changePasswordAction");
Route::add("/deleteAccount", "settingsController@deleteAccountAction");
Route::add("/dashboard", "dashboardController@dashboardAction");
Route::add("/newList", "listController@newListAction");
Route::add("/todoList", "listController@todoListAction");

$route = Route::run();


