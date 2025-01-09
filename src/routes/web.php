<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;

Route::get('/', [ItemController::class, 'index']);
Route::post('/favorite/{id}', [ItemController::class, 'favorite']);

//プロフィール設定に関するルート
Route::get('/mypage/profile', [ProfileController::class, 'profile_edit']);
Route::patch('/mypage/profile', [ProfileController::class, 'profile_update']);

//（ユーザー名orメールアドレス）＋パスワードでログインできるように特別にルートを用意
Route::group([
    'namespace' => 'App\Http\Controllers',
], function () {
    Route::post('/login', 'LoginController@store');
    Route::post('/logout', 'LoginController@destroy');
});