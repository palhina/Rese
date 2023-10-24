@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
    <div class="thanks__content">
        <div class="thanks__group-title">
            <h2>会員登録ありがとうございます</h2>
        </div>
        <div class="form__button">
            <a class="login__link" href="">ログインする</a>
        </div>
    </div>
@endsection