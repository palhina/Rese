<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Favorite;
use App\Models\Shop;
use App\Models\Reservation;

class FavoriteController extends Controller
{
    public function favorite(Request $request,$id)
    {
        $user = Auth::user();
        $shop = Shop::find($id);
        $shops = Shop::all();
        Favorite::create([
            'user_id' => $user->id,
            'shop_id' => $shop->id,
        ]);
        $userId = Auth::user()->id;
        $favorites =  Favorite::where('user_id',$userId)->get();
        $shops->each(function ($shop) use ($userId) {
            $shop->isFavorite = Favorite::isFavorite($shop->id, $userId)->exists();
        });
        return view('shop_all', compact('shops','favorites'));
    }

    public function deleteMyPage($id)
    {
        $favorite = Favorite::find($id)->delete();
        $user = Auth::user();
        $favorites = Favorite::where('user_id',$user->id)
        ->get();
        $reservations = Reservation::where('user_id',$user->id)
        ->orderBy('rsv_date', 'asc') 
        ->orderBy('rsv_time', 'asc')
        ->get();
        return view('my_page',compact('user','favorites','reservations'));
    }

     public function deleteShopAll($id)
    {
        $favorite = Favorite::find($id)->delete();
        $user = Auth::user();
        $shop = Shop::find($id);
        $shops = Shop::all();
        $userId = Auth::user()->id;
        $favorites = Favorite::where('user_id',$user->id)
        ->get();
        $shops->each(function ($shop) use ($userId) {
            $shop->isFavorite = Favorite::isFavorite($shop->id, $userId)->exists();
        });
        return view('shop_all',compact('user','favorites','shops'));
    }

}
