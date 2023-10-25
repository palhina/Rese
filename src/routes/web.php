<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageViewController;
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
Route::get('/', [PageViewController::class, 'index']);
// 店舗詳細（今は検証用。後でルートパス変える）
Route::get('/detail', [PageViewController::class, 'detail']);

// 認証機能必要（サンクス、予約、お気に入り、マイページ）
Route::middleware('auth')->group(function () {
    Route::get('/thanks', [PageViewController::class, 'thanks']);
    Route::get('/my_page', [PageViewController::class, 'myPage']);
});
