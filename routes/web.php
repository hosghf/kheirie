<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/dashbordAdmin', function () {
    return view('admin.Dashbord');
});
Route::get('/request', function () {
    return view('admin.requests_list');
});
Route::get('/variz', function () {
    return view('admin.variz_list');
});
Route::get('/varizModir', function () {
    return view('modir.variz');
});
Route::get('/acceptRegister', function () {
    return view('modir.acceptRegister');
});
Route::get('/register1', function () {
    return view('registerRequest/registerReq1');
});
Route::get('/register2', function () {
    return view('registerRequest/registerReq2');
});
Route::get('/register3', function () {
    return view('registerRequest/registerReq3');
});
Route::get('/login1', function () {
    return view('registerRequest/login');
});
Route::get('/test', 'test\testController@index');

