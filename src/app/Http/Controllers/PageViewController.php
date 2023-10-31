<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;
use App\Models\Reservation;
use App\Models\Favorite;


class PageViewController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        return view('shop_all', ['shops' => $shops]);
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
}
