@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/my_page.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('content')
    <div class="shop-detail__wrapper">
            <div class="shop__contents">
                <div class="shop__contents-ttl">
                    <a class="back" href="/edit_shop">&lt;</a>
                    <h2>{{ $shop->shop_name }}</h2>
                </div>
                <div class="shop__contents-img">
                    <img class="shop__img" src="{{ $shop->shop_photo }}">
                </div>
                <div class="shop__contents-tag">
                    <p>#{{ $shop->area->shop_area }}</p>
                    <p>#{{ $shop->genre->shop_genre }}</p>
                </div>
                <div class="shop__contents-desc">
                    <p>{{ $shop->shop_comment }}</p>
                </div>
            </div>
            <div class="shop__rsv">
                <div class="my-page__rsv-ttl">
                <h3>予約状況</h3>
            </div>
            <div class="my-page_rsv">
                <!-- foreach($reservations as $reservation) -->
                <div class="my-page__rsv-detail">
                        <div class="form__icon">
                            <i class="material-icons">schedule</i>
                            <p class="rsv__ttl">予約</p>
                        </div>
                        <table>
                            <tr>
                                <th>Shop</th>
                                <td>仙人</td>
                                <!-- <td>｛｛reservation->shop->shop_name｝｝</td> -->
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>〇〇様</td>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td>2021-11-11</td>
                                <!-- <td>｛｛reservation->rsv_date｝｝</td> -->
                            </tr>
                            <!-- 以下、my_page.blade.phpを参照に書く -->
                        </table>               
            </div>
        </div>
@endsection