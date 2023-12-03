@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/manager_login.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('content')
    @if (session('result'))
        <div class="flash_message">
            {{ session('result') }}
        </div>
    @endif
    <div class="login__content">
        <div class="login__group-title">
            <h2>店舗代表者ログイン</h2>
        </div>
        <form class="form" action="/login/manager" method="post">
        @csrf
            <div class="login__form-content">
                <p>店舗代表の方はログイン後、以下の操作が可能です。</p>
                <ul>
                    <li>店舗情報の作成、更新</li>
                    <li>予約情報の確認</li>
                </ul>
                <div class="form__email-input">
                    <div class="form__email-text">
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" />
                    </div>
                    <div class="form__error">
                        {{$errors->first('email')}}
                    </div>
                </div>
                <div class="form__pwd-input">
                    <div class="form__pwd-text">
                        <input type="password" name="password" placeholder="Password" />
                    </div>
                    <div class="form__error">
                        {{$errors->first('password')}}
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-login" type="submit">ログイン</button>
                </div>
                <p>新しく店舗代表者の登録を希望される場合、管理者にお問い合わせください。</p>
            </div>
        </form>
    </div>
@endsection