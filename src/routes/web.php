<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageViewController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TwoFactorAuthController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PaymentController;

Route::get('/', [PageViewController::class, 'index']);
Route::get('/detail/{id}', [PageViewController::class, 'detail']);
Route::post('/search', [ShopController::class, 'search']);

// 要ユーザー認証
Route::middleware('auth')->group(function () {
    Route::post('/logout/user', [AuthController::class,'userLogout']);
    // 予約処理、取り消し、変更
    Route::post('/reservation/{id}', [ReservationController::class, 'reserve']);
    Route::delete('/cancel/{id}', [ReservationController::class, 'cancel']);
    Route::get('/edit/{id}', [ReservationController::class, 'edit']);
    Route::put('/update/{id}', [ReservationController::class, 'update']);
    // マイページ(表示、お気に入り)
    Route::get('/my_page', [PageViewController::class, 'myPage']);
    Route::post('/favorite/{id}', [FavoriteController::class, 'favorite']);
    Route::delete('/fav_delete_shop/{id}', [FavoriteController::class, 'deleteShopAll']);
    Route::delete('/fav_delete_mypage/{id}', [FavoriteController::class, 'deleteMyPage']);
    // 評価機能
    Route::get('/rate/{id}', [RatingController::class, 'rate']);
    Route::post('/rate/{id}', [RatingController::class, 'review']);
    // 決済
    Route::prefix('/payment')->name('payment.')->group(function () {
        Route::get('/create', [PaymentController::class, 'create'])->name('create');
        Route::post('/store', [PaymentController::class, 'store'])->name('store');
    });
    // QRコード表示
    Route::get('/qrcode/{id}', [ReservationController::class, 'qr']);
});

// 二要素認証
Route::get('two_factor_auth/login_form', [TwoFactorAuthController::class,'twoFactorAuthLogin']);
Route::post('ajax/two_factor_auth/first_auth', [TwoFactorAuthController::class,'firstAuth']);
Route::post('ajax/two_factor_auth/second_auth', [TwoFactorAuthController::class,'secondAuth']);

// ユーザー作成、ログイン機能・サンクスページ
Route::get('/register/user', [AuthController::class,'userRegister']);
Route::post('/register/user', [AuthController::class,'postUserRegister']);
Route::get('/login/user', [AuthController::class,'userLogin'])->name('login');
Route::post('/login/user', [AuthController::class,'postUserLogin']);
Route::get('/thanks', [PageViewController::class, 'thanks']);

// 店舗代表者ログイン機能
Route::get('/login/manager', [AuthController::class, 'managerLogin'])->name('login.manager');
Route::post('/login/manager', [AuthController::class, 'postManagerLogin']);
Route::post('/logout/manager', [AuthController::class,'managerLogout']);

// 要店舗代表者認証
Route::middleware('auth.managers:managers')->group(function (){
    Route::get('/manager_menu', [PageViewController::class, 'managerMenu']);
    // 店舗表示、新規作成、編集
    Route::get('/create_shop', [ShopController::class, 'newShop']);
    Route::post('/create_shop/{id}', [ShopController::class, 'createShop']);
    Route::get('/check_shop', [ShopController::class, 'checkShop']);
    Route::get('/update_shop/{id}', [ShopController::class, 'editShop']);
    Route::put('/update_shop/{id}', [ShopController::class, 'updateShop']);
    // 予約確認
    Route::get('/booking_confirmation', [ReservationController::class, 'bookingConfirm']);
    Route::post('/booking_detail/{id}', [ReservationController::class, 'bookingDetail']);
});

// 管理者作成・ログイン機能　
Route::get('/register/admin', [AuthController::class, 'adminRegister']);
Route::post('/register/admin', [AuthController::class, 'postAdminRegister']);
Route::get('/login/admin', [AuthController::class, 'adminLogin'])->name('login.admin');
Route::post('/login/admin', [AuthController::class, 'postAdminLogin']);

// 要管理者認証
Route::middleware('auth.admins:admins')->group(function (){
    Route::post('/logout/admin', [AuthController::class,'adminLogout']);
    //店舗代表者作成 
    Route::get('/register/manager', [AuthController::class, 'managerRegister']);
    Route::post('/register/manager', [AuthController::class, 'postManagerRegister']);
    // お知らせメール送信
    Route::get('/send_email', [MailController::class, 'email']);
    Route::post('/send_email', [MailController::class, 'sendEmail']);
});
