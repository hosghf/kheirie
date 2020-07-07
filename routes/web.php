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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/test', 'test\testController@index');
Route::post('/test', 'test\testController@myauth');

//modir
Route::group(['middleware' => ['can:isModir', 'auth']], function () {

    Route::get('/modir/varizModir', 'modir\varizController@list');
    Route::post('/modir/varizModir', 'modir\varizController@variz');

    Route::get('/modir/acceptRegisterShow', 'modir\sabteNameController@index')->name('acceptReg');
    Route::get('/modir/acceptRegister/{id}', 'modir\sabteNameController@accept')->name('acceptReg');

    Route::get('/modir/darkhastList', 'modir\darkhastController@list');
    // search
    Route::post('/modir/darkhastList', 'modir\darkhastController@list');
    Route::get('/modir/darkhast/{id}', 'modir\darkhastController@show');
    Route::get('/modir/darkhast/{id}/taeed', 'modir\darkhastController@taeed');

    Route::post('/changePm/{username}', 'user\userManagementController@changePass')->name('changePass');
    Route::view( '/changePm','user_management\passwordchange')->name('changePass');

});

Route::group(['middleware' => ['can:isAdmin','auth'] ], function () {
    //admin/dashbord
    Route::get('/admin/dashbord', 'admin\dashbordController@index')->name('dashbord');
    Route::get('/home', 'admin\dashbordController@index')->name('dashbord');
    //admin/finance
    Route::get('/admin/varizha', 'admin\varizPayHelpController@varizList')->middleware('auth');
    //search in varizha
    Route::post('/admin/varizha', 'admin\varizPayHelpController@varizList')->middleware('auth');
    Route::get('/admin/helps', 'admin\varizPayHelpController@helps');
    Route::get('/admin/payList', 'admin\varizPayHelpController@paymentList');
    Route::get('/admin/payDetail/{id}', 'admin\varizPayHelpController@payDetail');
    // search in paylist
    Route::post('/admin/payList', 'admin\varizPayHelpController@paymentList');
    //admin/demand
    Route::get('/admin/demand/list', 'admin\demandsController@list');
    Route::get('/admin/demand/{id}', 'admin\demandsController@show');
    //search demand
    Route::post('/admin/demand/list', 'admin\demandsController@list');
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
    Route::post('/admin/settings/changetext', 'admin\settingsController@changeText');
    //change user
    Route::post('/changeP/{username}', 'user\userManagementController@changePass')->name('changePass');
    Route::view( '/changeP','user_management\passwordchange')->name('changePass');

});

//registration routes
Route::get('reg1', 'registerationrequest\RegisterRequestController@index');
Route::post('reg1', 'registerationrequest\RegisterRequestController@reg1');
Route::get('backReg1', 'registerationrequest\RegisterRequestController@backReg1');
Route::post('reg2', 'registerationrequest\RegisterRequestController@reg2');
Route::get('backReg2', 'registerationrequest\RegisterRequestController@backReg2');
Route::post('reg3', 'registerationrequest\RegisterRequestController@reg3');
Route::get('backReg3', 'registerationrequest\RegisterRequestController@backReg3');
Route::post('reg4', 'registerationrequest\RegisterRequestController@reg4');
Route::get('backReg4', 'registerationrequest\RegisterRequestController@backReg4');
Route::get('confirm', 'registerationrequest\RegisterRequestController@confirm');
Route::get('storeReg', 'registerationrequest\RegisterRequestController@store');
Route::get('finalMessage', 'registerationrequest\RegisterRequestController@finalMessage');

//login
Auth::routes();

Route::post('/zarinpal/request', 'zarinpal\reqController@request');
Route::get('/zarinpal/verify', 'zarinpal\verifyController@verify');
Route::get('/help', 'help\helpController@show');

//Route::get('login', 'myLoginController@show');
Route::get('logout', 'myLoginController@logout');
Route::post('login', 'myLoginController@myauth');

Route::redirect('/', '/login');
