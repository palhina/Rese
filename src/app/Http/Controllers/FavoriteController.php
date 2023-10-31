<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Favorite;
use App\Models\Shop;

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
        return view('shop_all', ['shops' => $shops]);
    }

}
