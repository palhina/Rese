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
            <div class="my-page__fav-card">
                <div class="my-page__fav-img">
                    <img class="card__img" src="/images/sushi.jpg">
                </div>
                <div class="my-page__fav-desc">
                    <div class="my-page__fav-name">
                        <p class="fav-name">仙人</p>
                    </div>
                    <div class="my-page__fav-tag">
                        <p class="fav-tag">#東京都</p>
                        <p class="fav-tag">#寿司</p>
                    </div>
                    <div class="my-page__shop-detail">
                        <button class="to-shop-detail">詳しく見る</button>
                    </div>
                    <input type="checkbox" class="heart-checkbox" id="heart-check">
                    <label class="fav-button" for="heart-check"></label>
                </div>
            </div>
            <div class="my-page__fav-card">
                <div class="my-page__fav-img">
                    <img class="card__img" src="/images/sushi.jpg">
                </div>
                <div class="my-page__fav-desc">
                    <div class="my-page__fav-name">
                        <p class="fav-name">仙人</p>
                    </div>
                    <div class="my-page__fav-tag">
                        <p class="fav-tag">#東京都</p>
                        <p class="fav-tag">#寿司</p>
                    </div>
                    <div class="my-page__shop-detail">
                        <button class="to-shop-detail">詳しく見る</button>
                    </div>
                    <input type="checkbox" class="heart-checkbox" id="heart-check">
                    <label class="fav-button" for="heart-check"></label>
                </div>
            </div>
            <div class="my-page__fav-card">
                <div class="my-page__fav-img">
                    <img class="card__img" src="/images/sushi.jpg">
                </div>
                <div class="my-page__fav-desc">
                    <div class="my-page__fav-name">
                        <p class="fav-name">仙人</p>
                    </div>
                    <div class="my-page__fav-tag">
                        <p class="fav-tag">#東京都</p>
                        <p class="fav-tag">#寿司</p>
                    </div>
                    <div class="my-page__shop-detail">
                        <button class="to-shop-detail">詳しく見る</button>
                    </div>
                    <input type="checkbox" class="heart-checkbox" id="heart-check">
                    <label class="fav-button" for="heart-check"></label>
                </div>
            </div>
            <div class="my-page__fav-card">
                <div class="my-page__fav-img">
                    <img class="card__img" src="/images/sushi.jpg">
                </div>
                <div class="my-page__fav-desc">
                    <div class="my-page__fav-name">
                        <p class="fav-name">仙人</p>
                    </div>
                    <div class="my-page__fav-tag">
                        <p class="fav-tag">#東京都</p>
                        <p class="fav-tag">#寿司</p>
                    </div>
                    <div class="my-page__shop-detail">
                        <button class="to-shop-detail">詳しく見る</button>
                    </div>
                    <input type="checkbox" class="heart-checkbox" id="heart-check">
                    <label class="fav-button" for="heart-check"></label>
                </div>
            </div>
            <div class="my-page__fav-card">
                <div class="my-page__fav-img">
                    <img class="card__img" src="/images/sushi.jpg">
                </div>
                <div class="my-page__fav-desc">
                    <div class="my-page__fav-name">
                        <p class="fav-name">仙人</p>
                    </div>
                    <div class="my-page__fav-tag">
                        <p class="fav-tag">#東京都</p>
                        <p class="fav-tag">#寿司</p>
                    </div>
                    <div class="my-page__shop-detail">
                        <button class="to-shop-detail">詳しく見る</button>
                    </div>
                    <input type="checkbox" class="heart-checkbox" id="heart-check">
                    <label class="fav-button" for="heart-check"></label>
                </div>
            </div>
        </div>
    </div>                
@endsection