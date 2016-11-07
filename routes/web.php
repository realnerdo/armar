<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('create-user', function () {
    return view('create-user');
});

Route::get('create-equipment', function () {
    return view('create-equipment');
});

Route::get('create-service', function () {
    return view('create-service');
});

Route::get('create-client', function () {
    return view('create-client');
});

Route::get('catalog-services', function () {
    return view('catalog-services');
});

Route::get('catalog-users', function () {
    return view('catalog-users');
});

Route::get('catalog-clients', function () {
    return view('catalog-clients');
});

Route::get('catalog-equipments', function () {
    return view('catalog-equipments');
});

Route::get('catalog-warehouses', function () {
    return view('catalog-warehouses');
});

Route::get('create-maintenance', function () {
    return view('create-maintenance');
});
