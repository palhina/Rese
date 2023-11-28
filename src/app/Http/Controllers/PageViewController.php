<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;
use App\Models\Reservation;
use App\Models\Favorite;
use App\Models\User;
use App\Models\Area;
use App\Models\Genre;

class PageViewController extends Controller
{
    public function index()
    {
        $areas = Area::all();
        $genres = Genre::all();
        $shops = Shop::all();
        $favorites = [];
        if (Auth::check()) {
            $userId = Auth::user()->id;
            $favorites =  Favorite::where('user_id',$userId)->get();
            $shops->each(function ($shop) use ($userId) {
                $shop->isFavorite = Favorite::isFavorite($shop->id, $userId)->exists();
            });   
         return view('shop_all', compact('shops','favorites','areas','genres'));
        }
        else{
            return view('shop_all', compact('shops','areas','genres'));
        }
    }
    
    public function detail($id)
    {
        $shop = Shop::find($id);
        return view('shop_detail',compact('shop'));
    }

    public function thanks()
    {
        return view('thanks');
    }

    public function myPage()
    {   
        $user = Auth::user();
        $reservations = Reservation::where('user_id',$user->id)
        ->orderBy('rsv_date', 'asc') 
        ->orderBy('rsv_time', 'asc')
        ->get();
        $favorites =  Favorite::where('user_id',$user->id)->get();
        return view('my_page',compact('user','reservations','favorites'));
    }

    // 予約変更ページ表示
    public function edit($id)
    {
        $shop = Shop::find($id);
        return view('edit',compact('shop'));
    }

    // 評価ページ表示
    public function rate($id)
    {
        $user = Auth::user();
        $shop = Shop::find($id);
        return view('rating',compact('shop','user'));
    }

    // 店舗管理

    public function managerLogin()
    {
        return view('manager_login');
    }

    public function managerRegister()
    {
        return view('manager_register');
    }

    public function administerLogin()
    {
        return view('administer_login');
    }

    public function managerMenu()
    {
        return view('manager_menu');
    }

    public function createShop()
    {
        return view('create_shop');
    }
    // 作成した店舗一覧表示
    public function editShop()
    {
        $areas = Area::all();
        $genres = Genre::all();
        $shops = Shop::all();
        // if (Auth::check()) {
        //     $userId = Auth::user()->id;
        return view('edit_shop', compact('shops','areas','genres'));
    }

    public function updateShop($id)
    {
       $shop = Shop::find($id);
       return view('update_shop',compact('shop'));
    }
    public function bookingConfirm($id)
    {
        $shop = Shop::find($id);
        // $reservations = Reservation::where('user_id',$user->id)
        // ->orderBy('rsv_date', 'asc') 
        // ->orderBy('rsv_time', 'asc')
        // ->get();
        // if (Auth::check()) {
        //     $userId = Auth::user()->id;
        return view('booking_confirmation', compact('shop',));
    }
}
