<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/login', 'LoginController@index');
    Route::post('/login/checkLogin', 'LoginController@checkLogin');
    Route::get('/change-pwd', 'LoginUserController@changePassword');
    Route::post('/change-pwd-complete', 'LoginUserController@changePasswordComplete');
    Route::get('/logout', 'LoginController@logout');
    Route::group(['prefix' => 'user', 'middleware' => ['role:admin']], function () {
        Route::get('/list', 'LoginUserController@filterUserList');
        Route::get('/change-pwd-by-admin/{userId}', 'LoginUserController@changePasswordByAdmin')->whereNumber('userId');
        Route::post('/change-pwd-by-admin-complete/{userId}', 'LoginUserController@changePasswordByAdminComplete')->whereNumber('userId');
        Route::view('/registration', 'users.register');
        Route::post('/registration-confirm', 'LoginUserController@registerConfirm');
        Route::post('/registration-complete', 'LoginUserController@registerComplete');
        Route::post('/delete/{userId}', 'LoginUserController@userDelete')->whereNumber('userId');
        Route::get('/edit/{userId}', 'LoginUserController@edit')->whereNumber('userId');
        Route::post('/edit-confirm/{userId}', 'LoginUserController@editConfirm')->whereNumber('userId');
        Route::post('/edit-complete/{userId}', 'LoginUserController@editComplete')->whereNumber('userId');
    });
});
Route::group(['prefix' => 'customer', 'namespace' => 'App\Http\Controllers'], function () {
    Route::get('/register', function () {
        return view('customer.register');
    });
    Route::post('/register-confirm', 'CustomerController@registerConfirm');
    Route::post('/register-complete', 'CustomerController@registerComplete');
});
