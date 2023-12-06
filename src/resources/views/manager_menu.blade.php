@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/manager_menu.css') }}">
@endsection

@section('content')
    <div class="manager-menu__content">
        <h2>ようこそ、{{ Auth::guard('managers')->user()->name }}さん</h2>
        <ul>
            <li class="create__shop"><a href="/check_shop">店舗情報の新規作成・更新</a></li>
            <li class="shops__list"><a href="/booking_confirmation">予約確認</a></li>
        </ul>
    </div>
@endsection

