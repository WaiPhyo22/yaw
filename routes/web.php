<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TownController;
use App\Http\Controllers\VillageController;
use App\Http\Controllers\FestivalController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\TraditionController;

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

Route::get('/waiphyo', function () {
    return view('waiphyo');
});

Route::get('/anyarwarbin', function () {
    return view('village');
});

Route::get('/digitalcity', function () {
    return view('digitalcity');
});

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/home', [FrontendController::class, 'home'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/histories', [FrontendController::class, 'histories'])->name('histories');
Route::get('/histories/{id}', [FrontendController::class, 'historiesDetail'])->name('histories.detail');
Route::get('/villages', [FrontendController::class, 'villages'])->name('villages');
Route::get('/festivals', [FrontendController::class, 'festivals'])->name('festivals');
Route::get('/festival/{id}', [FrontendController::class, 'festivalDetail'])->name('festival.detail');


Route::get('/suggest', [SuggestionController::class, 'create'])->name('suggest');
Route::post('/suggest', [SuggestionController::class, 'store'])->name('suggest.store');

// Admin
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/suggestions', [SuggestionController::class, 'index'])->name('admin.suggestions.index');
    Route::delete('/suggestions/{id}', [SuggestionController::class, 'destroy'])->name('admin.suggestions.destroy');
});

Route::middleware(['role:admin'])->prefix('admin')->group(function () {
    Route::get('/towns/list', [TownController::class, 'index'])->name('towns.index');
    Route::get('/towns/create', [TownController::class, 'create'])->name('towns.create');
    Route::post('/towns', [TownController::class, 'store'])->name('towns.store');
    Route::get('/towns/{town}/edit', [TownController::class, 'edit'])->name('towns.edit');
    Route::put('/towns/{town}', [TownController::class, 'update'])->name('towns.update');
    Route::delete('/towns/{town}', [TownController::class, 'destroy'])->name('towns.destroy');

    Route::get('/villages/list', [VillageController::class, 'index'])->name('villages.index');
    Route::get('/villages/create', [VillageController::class, 'create'])->name('villages.create');
    Route::post('/villages', [VillageController::class, 'store'])->name('villages.store');
    Route::get('/villages/{village}/edit', [VillageController::class, 'edit'])->name('villages.edit');
    Route::put('/villages/{village}', [VillageController::class, 'update'])->name('villages.update');
    Route::delete('/villages/{village}', [VillageController::class, 'destroy'])->name('villages.destroy');

    Route::get('/festivals/list', [FestivalController::class, 'index'])->name('festivals.index');
    Route::get('/festivals/create', [FestivalController::class, 'create'])->name('festivals.create');
    Route::post('/festivals', [FestivalController::class, 'store'])->name('festivals.store');
    Route::get('/festivals/{festival}/edit', [FestivalController::class, 'edit'])->name('festivals.edit');
    Route::put('/festivals/{festival}', [FestivalController::class, 'update'])->name('festivals.update');
    Route::delete('/festivals/{festival}', [FestivalController::class, 'destroy'])->name('festivals.destroy');

    Route::get('/histories/list', [HistoryController::class, 'index'])->name('histories.index');
    Route::get('/histories/create', [HistoryController::class, 'create'])->name('histories.create');
    Route::post('/histories', [HistoryController::class, 'store'])->name('histories.store');
    Route::get('/histories/{history}/edit', [HistoryController::class, 'edit'])->name('histories.edit');
    Route::put('/histories/{history}', [HistoryController::class, 'update'])->name('histories.update');
    Route::delete('/histories/{history}', [HistoryController::class, 'destroy'])->name('histories.destroy');

    Route::get('/traditions/list', [TraditionController::class, 'index'])->name('traditions.index');
    Route::get('/traditions/create', [TraditionController::class, 'create'])->name('traditions.create');
    Route::post('/traditions', [TraditionController::class, 'store'])->name('traditions.store');
    Route::get('/traditions/{tradition}/edit', [TraditionController::class, 'edit'])->name('traditions.edit');
    Route::put('/traditions/{tradition}', [TraditionController::class, 'update'])->name('traditions.update');
    Route::delete('/traditions/{tradition}', [TraditionController::class, 'destroy'])->name('traditions.destroy');

    Route::get('/suggestions/list', [SuggestionController::class, 'index'])->name('suggestions.index');
    Route::get('/suggestions/{id}/edit', [SuggestionController::class, 'edit'])->name('suggestions.edit');
    Route::put('/suggestions/{id}', [SuggestionController::class, 'update'])->name('suggestions.update');
    Route::delete('/suggestions/{id}', [SuggestionController::class, 'destroy'])->name('suggestions.destroy');
});


Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/download', 'LoginUserController@getDownload');
    Route::get('/login', 'LoginController@index');
    Route::post('/login/checkLogin', 'LoginController@checkLogin');
    Route::get('/change-pwd', 'LoginUserController@changePassword');
    Route::post('/change-pwd-complete', 'LoginUserController@changePasswordComplete');
    Route::get('/logout', 'LoginController@logout')->name('logout');
    Route::group(['prefix' => 'user', 'middleware' => ['role:admin']], function () {
        Route::get('/list', 'LoginUserController@filterUserList');
        Route::get('/change-pwd-by-admin/{userId}', 'LoginUserController@changePasswordByAdmin')->whereNumber('userId');
        Route::post('/change-pwd-by-admin-complete/{userId}', 'LoginUserController@changePasswordByAdminComplete')->whereNumber('userId');
        Route::view('/registration', 'admin.users.register');
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
    Route::post('/download', 'LoginUserController@getDownload');
});
