@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/shop_detail.css') }}">
@endsection

@section('content')
    <div class="shop-detail__wrapper">
            <div class="shop__contents">
                <div class="shop__contents-ttl">
                    <button class="back">&lt;</button>
                    <h2>仙人</h2>
                </div>
                <div class="shop__contents-img">
                    <img class="shop__img" src="sushi.jpg">
                </div>
                <div class="shop__contents-tag">
                    <p>#東京都</p>
                    <p>#寿司</p>
                </div>
                <div class="shop__contents-desc">
                    <p>料理長厳選の食材から作る寿司を用いたコースをぜひお楽しみください。食材・味・価格、お客様の満足度を徹底的に追及したお店です。特別な日のお食事、ビジネス接待まで気軽に使用することができます。</p>
                </div>
            </div>
            <div class="shop__rsv">
                <h3>予約</h3>
                <form class="shop__rsv-form" action="" method="get">
                        <!-- csrf -->
                    <div class="form__group">
                        <input class="rsv-date" type="date" name="date">
                    </div>
                    <div class="form__group">
                        <select class="rsv-time" name="time">
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">12:00</option>
                            <option value="13:00">13:00</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:30">17:00</option>
                            <option value="18:00">18:00</option>
                            <option value="19:00">19:00</option>
                            <option value="20:00">20:00</option>
                            <option value="21:00">21:00</option>
                        </select>
                    </div>
                    <div class="form__group">
                        <select class="rsv-number" name="number">
                            <option value="1">1人</option>
                            <option value="2">2人</option>
                            <option value="3">3人</option>
                            <option value="4">4人</option>
                            <option value="5">5人</option>
                            <option value="6">6人</option>
                            <option value="7">7人</option>
                            <option value="8">8人</option>
                            <option value="9">9人</option>
                            <option value="10">10人</option>
                        </select>
                    </div>
                    <div class="rsv-confirm">
                        <!-- 多分Javascript使用し仕上げる -->
                        <table>
                            <tr>
                                <th>Shop</th>
                                <td>仙人</td>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td>2021-04-21</td>
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
                    <div class="form__button">
                        <input class="form__button-rsv" type="submit" value="予約する">
                    </div>
                </form>
            </div>
        </div>
@endsection