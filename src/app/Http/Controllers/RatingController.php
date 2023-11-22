<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Shop;
use App\Models\Rating;
use App\Http\Requests\RatingRequest;

class RatingController extends Controller
{
    public function review(RatingRequest $request,$id)
    {
        $user = Auth::user();
        $shop = Shop::find($id);
        Rating::create([
            'user_id' => $user->id,
            'shop_id' => $shop->id,
            'rating' => $request->input('rating'),
            'comment' => $request->input('comment'),
        ]);
        return view('rated');
    }
}
