@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/manager_menu.css') }}">
@endsection

@section('content')
    <div class="manager-menu__content">
        <h2>QRコード</h2>
        <p>このQRコードをお店で提示してください</p>
        <div class="qr-code">
        {!! QrCode::size(200)->generate(url("/bookingdetail/{$reservation->id}")) !!}
        </div>
    </div>
@endsection