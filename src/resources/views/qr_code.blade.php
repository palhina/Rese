@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/manager_menu.css') }}">
@endsection

@section('content')
    <div class="manager-menu__content">
        <h2>QRコード</h2>
        <p>このQRコードをお店で提示してください</p>
        <div class="qr-code">
        {{$qr_image}}
        </div>
    </div>
@endsection