<?php

use App\Http\Controllers\IntroductionController;
use App\Http\Controllers\ResisterController;
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

// ホーム
Route::get('/', function () {
    return view('home');
});

// 登録
Route::prefix('resister')->controller(ResisterController::class)->group(function () {
    Route::get('index', 'index')->name('resister.index');
    Route::post('confirm', 'confirm')->name('resister.confirm');
    Route::post('resister', 'resister')->name('resister.resister');
    Route::get('complete', 'complete')->name('resister.complete');
});

// 紹介
Route::prefix('introduction')->controller(IntroductionController::class)->group(function () {
    Route::post('index', 'index')->name('introduction.index');
});
