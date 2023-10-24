extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/my_page.css') }}">
@endsection

@section('content')
    <h2>testさん</h2>
    <div class="my-page__wrapper">
        <div class="my-page__rsv">
            <div class="my-page__rsv-ttl">
                <h3>予約状況</h3>
            </div>
            <div class="my-page__rsv-detail">
                <p class="rsv__ttl">予約「１」</p>
                <button class="back">×</button>
                <table>
                    <tr>
                        <th>Shop</th>
                        <td>仙人</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>2021-04-01</td>
                    </tr>
                    <tr>
                        <th>Time</th>
                        <td>17:00</td>
                    </tr>
                    <tr>
                        <th>Number</th>
                        <td>1人</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="shop__rsv">
            <h3>お気に入り店舗</h3>
            <div class="my-page__fav">
                <div class="my-page__fav-card">
                    <div class="my-page__fav-img"> 
                        <img class="card__img" src="sushi.jpg">
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
                        <img class="card__img" src="sushi.jpg">
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
                        <img class="card__img" src="sushi.jpg">
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
                        <img class="card__img" src="sushi.jpg">
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
    </div>
@endsection