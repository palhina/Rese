@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/shop_all.css') }}">
@endsection

@section('content')
    <div class="shop-all__wrapper">
        <div class="search-form">
            <div class="search-form__area">
                <select class="search__area" name="area">
                    <option value="">All area</option>
                </select>
            </div>
            <div class="search-form__genre">
                <select class="search__genre" name="genre">
                    <option value="">All genre</option>
                </select>
            </div>
            <div class="search-form__keyword">
                <input class="search__key" type="text" name="keyword" placeholder="Search...">
            </div>
        </div>
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
                        <form class="form" action="/detail/{{$shop->id}}" method="get">
                        @csrf
                            <button class="to-shop-detail">詳しく見る</button>
                        </form>
                    </div>
                    <input type="checkbox" class="heart-checkbox" id="heart-check">
                    <label class="fav-button" for="heart-check"></label>
                </div>
            </div>
            @endforeach
        </div>
    </div>                
@endsection