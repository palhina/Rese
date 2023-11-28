@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('content')
    <div class="login__content">
        <div class="login__group-title">
            <h2>管理者ログイン</h2>
        </div>
        <form class="form" action="/login" method="post">
        @csrf
            
            <div class="login__form-content">
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
                <p>管理者はログイン後、店舗代表者アカウントの作成が可能になります。</p>
            </div>
        </form>
    </div>
@endsection