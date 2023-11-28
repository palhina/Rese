@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/create_shop.css') }}">
@endsection

@section('content')
    <div>
        <div class="register__group-title">
            <h2>新しく店舗情報を作成</h2>
        </div>
        <form class="form" action="/register" method="post">
        @csrf
            <div class="register__form-content">
                <div class="form__name-input">
                    <div class="form__name-text">
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="店舗名" />
                    </div>
                    <div class="form__error">
                        {{$errors->first('name')}}
                    </div>
                </div>
                <div class="search-form__area">
                    <select class="search__area" name="shop_area">
                        <option value="">エリアを選択</option>
                            <option value="1">東京</option>
                            <option value="2">大阪</option>
                        <!-- 以上は試験的に入力、地域IDも適当のため送信データがおかしいはず。コード修正後に以下の文を代わりに挿入 -->
                        <!-- あっとforeach(areas as area) -->
                        <!-- <option value="｛｛ area->id ｝｝">｛｛ area->shop_area ｝｝</option> -->
                        <!-- endforeach -->
                    </select>
                </div>
                <div class="search-form__genre">
                    <select class="search__genre" name="shop_genre">
                        <option value="">ジャンルを選択</option>
                        <option value="1">焼肉</option>
                        <option value="2">寿司</option>
                        <!-- foreach(genres as genre)
                        <option value="｛｛ $genre->id ｝｝"->｛｛genre->shop_genre ｝｝</option>
                        endforeach -->
                    </select>
                </div>
                <div class="form-group">
                    <h4>店舗概要(任意)</h4>
                    <textarea class="form__rate-comment" col="50" name="comment"></textarea>
                    <div class="form__error">
                        @if ($errors->has('comment'))
                            {{$errors->first('comment')}}
                        @endif 
                    </div>
                </div>
                <div class="form-group">
                    <h4>店舗概要(任意)</h4>
                    <textarea class="form__rate-comment" col="50" name="comment"></textarea>
                    <div class="form__error">
                        @if ($errors->has('comment'))
                            {{$errors->first('comment')}}
                        @endif 
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-register" type="submit">登録</button>
                </div>
            </div>
        </form>
    </div>
@endsection

