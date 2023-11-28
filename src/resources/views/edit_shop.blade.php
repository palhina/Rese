@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/shop_all.css') }}">
@endsection

@section('content')
<p>作成した店舗一覧</p>
    <div class="shop-all">
        @foreach ($shops as $shop)
        <div class="shop-all__card">
            <div class="shop-all__card-img">
                <img class="card__img" src="{{ $shop->shop_photo }}">
            </div>
            <div class="shop-all__card-desc">
                <div class="shop-all__card-name">
                    <p class="card-name">{{ $shop->shop_name }}</p>
                </div>
                <div class="shop-all__card-tag">
                    <p class="card-tag">#{{ $shop->area->shop_area}}</p>
                    <p class="card-tag">#{{ $shop->genre->shop_genre }}</p>
                </div>
                <div class="shop-all__card-detail"> 
                    <form class="form" action="/update_shop/{{$shop->id}}" method="get">
                    @csrf
                        <button class="to-shop-detail">店舗情報更新</button>
                    </form>
                    <form class="form" action="/booking_confirmation/{{$shop->id}}" method="get">
                    @csrf
                        <button class="to-shop-detail">予約の確認</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>                
@endsection