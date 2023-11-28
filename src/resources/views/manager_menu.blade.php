@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/manager_menu.css') }}">
@endsection

@section('content')
    <div class="manager-menu__content">
        <h2>ようこそ、〇〇さん</h2>
        <ul>
            <li class="create__shop"><a href="/create_shop">店舗情報の新規作成</a></li>
            <li class="shops__list"><a href="/edit_shop">店舗情報一覧</a></li>
            <p>店舗情報の更新、予約情報の確認はこちらから</p>
        </ul>
    </div>
@endsection

