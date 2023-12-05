@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/booking_detail.css') }}">
@endsection

@section('content')
    <div class="booking__wrapper">
        <h2>予約詳細</h2>
            <div class="booking__content">   
                <h3 class="booking__shop-name">店舗名:{{$reservation->shop->shop_name}}</h3>
                <div class="booking__detail">
                    <table>
                        <tr>
                            <th>お名前</th>
                            <td>{{$reservation->user->name}}様</td>    
                        </tr>
                        <tr>
                            <th>予約日</th>
                            <td>{{$reservation->rsv_date}}</td>
                        </tr>
                        <tr>
                            <th>予約時間</th>
                            <td>{{$reservation->rsv_time}}</td>    
                        </tr>
                        <tr>
                            <th>予約人数</th>
                            <td>{{$reservation->rsv_guests}}人</td>    
                        </tr>
                    </table>
                    <div class="back">
                        <a class="back__btn" href="/booking_confirmation">戻る</a>
                    </div>
                    </div>
            </div>    
        </div>   
    </div>
@endsection