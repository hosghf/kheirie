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

//modir
Route::get('/modir/varizModir', 'modir\varizController@list');
Route::post('/modir/varizModir', 'modir\varizController@variz');

Route::get('/modir/acceptRegisterShow', 'modir\sabteNameController@index');
Route::get('/modir/acceptRegister/{id}', 'modir\sabteNameController@accept');

Route::get('/login1', function () {
    return view('registerRequest/login');
});
Route::get('/test', 'test\testController@index');


//admin/dashbord
Route::get('/admin/dashbord', 'admin\dashbordController@index')->name('dashbord');
//admin/finance
Route::get('/admin/varizha', 'admin\varizPayHelpController@varizList');
Route::get('/admin/helps', 'admin\varizPayHelpController@helps');
Route::get('/admin/payList', 'admin\varizPayHelpController@paymentList');
//admin/demand
Route::get('/admin/demand/list', 'admin\demandsController@list');
Route::get('/admin/demand/{id}', 'admin\demandsController@show');
//demand pay
Route::get('/admin/demand/{id}/payShow', 'admin\demandsController@payShow');
Route::post('/admin/demand/{id}/pay', 'admin\demandsController@pay');
//school management
Route::get('/admin/school', 'admin\manageSchoolController@index');
Route::post('/admin/addSchool', 'admin\manageSchoolController@add');
Route::get('/admin/addSchool', 'admin\manageSchoolController@index');
Route::get('/admin/editSchool/{school}', 'admin\manageSchoolController@showUpdate');
Route::post('/admin/editSchool/{school}', 'admin\manageSchoolController@update');
//admin settings
Route::get('/admin/settings', 'admin\settingsController@index');
Route::post('/admin/settings/addType', 'admin\settingsController@addType');


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
