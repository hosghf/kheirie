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
Route::get('/login1', function () {
    return view('registerRequest/login');
});
Route::get('/test', 'test\testController@index');

//finance
Route::get('/admin/varizha', 'admin\testController@index');

//school management
Route::get('/admin/school', 'admin\manageSchoolController@index');
Route::post('/admin/addSchool', 'admin\manageSchoolController@add');
Route::get('/admin/editSchool/{school}', 'admin\manageSchoolController@showUpdate');
Route::post('/admin/editSchool/{school}', 'admin\manageSchoolController@update');

//registration routes
Route::get('reg1', 'RegisterationRequest\RegisterRequestController@index');
Route::post('reg1', 'RegisterationRequest\RegisterRequestController@reg1');
Route::get('backReg1', 'RegisterationRequest\RegisterRequestController@backReg1');
Route::post('reg2', 'RegisterationRequest\RegisterRequestController@reg2');
Route::get('backReg2', 'RegisterationRequest\RegisterRequestController@backReg2');
Route::post('reg3', 'RegisterationRequest\RegisterRequestController@reg3');
Route::get('backReg3', 'RegisterationRequest\RegisterRequestController@backReg3');
Route::post('reg4', 'RegisterationRequest\RegisterRequestController@reg4');
Route::get('backReg4', 'RegisterationRequest\RegisterRequestController@backReg4');
Route::get('confirm', 'RegisterationRequest\RegisterRequestController@confirm');
Route::get('storeReg', 'RegisterationRequest\RegisterRequestController@store');
Route::get('finalMessage', 'RegisterationRequest\RegisterRequestController@finalMessage');
