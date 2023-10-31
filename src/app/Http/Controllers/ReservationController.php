<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Reservation;
use App\Models\Shop;

class ReservationController extends Controller
{
    // 飲食店予約
    public function reserve(Request $request,$id)
    {
        $user = Auth::user();
        $shop = Shop::find($id);
         Reservation::create([
            'user_id' => $user->id,
            'shop_id' => $shop->id,
            'rsv_date' => $request->input('date'),
            'rsv_time' => $request->input('time'),
            'rsv_guests' => $request->input('number'),
        ]);
        return view('done');
    }
}
