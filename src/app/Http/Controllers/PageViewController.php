<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;

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
        return view('my_page',compact('user'));
    }
}