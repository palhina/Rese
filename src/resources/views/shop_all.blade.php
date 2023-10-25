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
            <div class="my-page__fav-card">
                <div class="my-page__fav-img">
                    <img class="card__img" src="{{ $shop->shop_photo }}">
                </div>
                <div class="my-page__fav-desc">
                    <div class="my-page__fav-name">
                        <p class="fav-name">{{ $shop->shop_name }}</p>
                    </div>
                    <div class="my-page__fav-tag">
                        <p class="fav-tag">#{{ $shop->area_id }}</p>
                        <p class="fav-tag">#{{ $shop->genre_id }}</p>
                    </div>
                    <div class="my-page__shop-detail">
                        <form class="form" action="/detail" method="get">
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