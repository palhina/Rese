<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageViewController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TwoFactorAuthController;



Route::get('/', [PageViewController::class, 'index']);
Route::get('/detail/{id}', [PageViewController::class, 'detail']);
Route::post('/search', [ShopController::class, 'search']);

// 認証機能必要（予約、お気に入り、マイページ）
Route::middleware('auth')->group(function () {
    Route::post('/logout/user', [AuthController::class,'userLogout']);
    Route::post('/reservation/{id}', [ReservationController::class, 'reserve']);
    Route::delete('/cancel/{id}', [ReservationController::class, 'cancel']);
    Route::get('/my_page', [PageViewController::class, 'myPage']);
    Route::post('/favorite/{id}', [FavoriteController::class, 'favorite']);
    Route::delete('/fav_delete_shop/{id}', [FavoriteController::class, 'deleteShopAll']);
    Route::delete('/fav_delete_mypage/{id}', [FavoriteController::class, 'deleteMyPage']);
    Route::get('/edit/{id}', [PageViewController::class, 'edit']);
    Route::put('/update/{id}', [ReservationController::class, 'update']);
    Route::get('/rate/{id}', [PageViewController::class, 'rate']);
    Route::post('/rate/{id}', [RatingController::class, 'review']);
   
});

// 以下追加実装
// 二要素認証
Route::get('two_factor_auth/login_form', [TwoFactorAuthController::class,'login_form']);
Route::post('ajax/two_factor_auth/first_auth', [TwoFactorAuthController::class,'first_auth']);
Route::post('ajax/two_factor_auth/second_auth', [TwoFactorAuthController::class,'second_auth']);

// ユーザー作成、ログイン機能・サンクスページ
Route::get('/register/user', [AuthController::class,'userRegister']);
Route::post('/register/user', [AuthController::class,'postUserRegister']);
Route::get('/login/user', [AuthController::class,'userLogin'])->name('login');
Route::post('/login/user', [AuthController::class,'postUserLogin']);
Route::get('/thanks', [PageViewController::class, 'thanks']);

// 店舗代表者作成、ログイン機能　
Route::get('/register/manager', [AuthController::class, 'managerRegister']);
Route::post('/register/manager', [AuthController::class, 'postManagerRegister']);
Route::get('/login/manager', [AuthController::class, 'managerLogin']);
Route::post('/login/manager', [AuthController::class, 'postManagerLogin']);
Route::post('/logout/manager', [AuthController::class,'managerLogout']);


// 管理者作成・ログイン機能　
Route::get('/register/admin', [AuthController::class, 'adminRegister']);
Route::post('/register/admin', [AuthController::class, 'postAdminRegister']);
Route::get('/login/admin', [AuthController::class, 'adminLogin']);
Route::post('/login/admin', [AuthController::class, 'postAdminLogin']);
Route::post('/logout/admin', [AuthController::class,'adminLogout']);


// 店舗代表者メニュー,ミドルウェアかける
Route::get('/manager_menu', [PageViewController::class, 'managerMenu']);
Route::get('/create_shop', [PageViewController::class, 'createShop']);
Route::get('/edit_shop', [PageViewController::class, 'editShop']);
Route::get('/update_shop/{id}', [PageViewController::class, 'updateShop']);
Route::get('/booking_confirmation/{id}', [PageViewController::class, 'bookingConfirm']);

