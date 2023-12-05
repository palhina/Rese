<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;
use App\Models\Favorite;

class ShopController extends Controller
{
    // 検索機能
    public function search(Request $request)
    {   
        // 検索機能
        $areas = Area::all();
        $genres = Genre::all();
        $shop_area = $request->input('shop_area');
        $shop_genre = $request->input('shop_genre');
        $keyword = $request->input('keyword');
        $query = Shop::query();

        if (!empty($shop_area)) {
            $query->where('area_id', $shop_area);
        }
         if (!empty($shop_genre)) {
            $query->where('genre_id', $shop_genre);
        }
        if (!empty($keyword)) {
            $query->where('shop_name', 'LIKE', '%' . $keyword . '%');
        }
        $results = $query->get();

        // 検索後お気に入り表示
        $shops = Shop::all();
        $favorites = [];
        if (Auth::check()) {
            $userId = Auth::user()->id;
            $favorites =  Favorite::where('user_id',$userId)->get();
            $results->each(function ($shop) use ($userId) {
                $shop->isFavorite = Favorite::isFavorite($shop->id, $userId)->exists();
            });   
         return view('results', compact('results','areas','genres','favorites'));
        }
        else{
            return view('results', compact('results','areas','genres'));
        }
    }
}
