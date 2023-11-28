<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageViewController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\RatingController;



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
Route::get('/detail/{id}', [PageViewController::class, 'detail']);
Route::post('/search', [ShopController::class, 'search']);
Route::get('/manager_login', [PageViewController::class, 'managerLogin']);
Route::get('/administer_login', [PageViewController::class, 'administerLogin']);
// 以下認証機能（店舗代表者）追加
// メニュー選択画面
Route::get('/manager_menu', [PageViewController::class, 'managerMenu']);
Route::get('/create_shop', [PageViewController::class, 'createShop']);
Route::get('/edit_shop', [PageViewController::class, 'editShop']);
Route::get('/update_shop/{id}', [PageViewController::class, 'updateShop']);
Route::get('/booking_confirmation/{id}', [PageViewController::class, 'bookingConfirm']);
// 以下認証機能（管理者）
Route::get('/manager_register', [PageViewController::class, 'managerRegister']);

// 認証機能必要（サンクス、予約、お気に入り、マイページ）
Route::middleware('auth')->group(function () {
    Route::post('/reservation/{id}', [ReservationController::class, 'reserve']);
    Route::delete('/cancel/{id}', [ReservationController::class, 'cancel']);
    Route::get('/thanks', [PageViewController::class, 'thanks']);
    Route::get('/my_page', [PageViewController::class, 'myPage']);
    Route::post('/favorite/{id}', [FavoriteController::class, 'favorite']);
    Route::delete('/fav_delete_shop/{id}', [FavoriteController::class, 'deleteShopAll']);
    Route::delete('/fav_delete_mypage/{id}', [FavoriteController::class, 'deleteMyPage']);
    Route::get('/edit/{id}', [PageViewController::class, 'edit']);
    Route::put('/update/{id}', [ReservationController::class, 'update']);
    Route::get('/rate/{id}', [PageViewController::class, 'rate']);
    Route::post('/rate/{id}', [RatingController::class, 'review']);
   
});
