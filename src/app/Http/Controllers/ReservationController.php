<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Reservation;
use App\Models\Shop;
use App\Models\Favorite;
use App\Http\Requests\ReservationRequest;

class ReservationController extends Controller
{
    // 飲食店予約
    public function reserve(ReservationRequest $request,$id)
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

    // 予約削除
    public function cancel($id)
    {
        $reservation = Reservation::find($id)->delete();
        $user = Auth::user();
        $reservations = Reservation::where('user_id',$user->id)
        ->orderBy('rsv_date', 'asc') 
        ->orderBy('rsv_time', 'asc')
        ->get();
        $favorites = Favorite::where('user_id',$user->id)
        ->get();
        return view('my_page',compact('user','reservations','favorites'));
    }

    // 予約変更
    public function update(ReservationRequest $request, $id)
    {
        $user = Auth::user();
        $reservation = Reservation::find($id);
        
        $reservation->rsv_date = $request->input('date');
        $reservation->rsv_time = $request->input('time');
        $reservation->rsv_guests = $request->input('number');
        
        $reservation->save();

        $reservation = Reservation::where('id', $id)
        ->where('user_id', $user->id)
        ->first();

        $reservations = Reservation::where('user_id',$user->id)
        ->orderBy('rsv_date', 'asc') 
        ->orderBy('rsv_time', 'asc')
        ->get();
        $favorites = Favorite::where('user_id',$user->id)
        ->get();
        return view('my_page',compact('user','reservations','favorites'));
    }
}
