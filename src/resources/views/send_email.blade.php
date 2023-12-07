@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/manager_menu.css') }}">
@endsection

@section('content')
    @if (session('result'))
        <div class="flash_message">
            {{ session('result') }}
        </div>
    @endif
    <div class="manager-menu__content">
        <p>ここではユーザーにメールが送信できます</p>
        <form method="post" action="/send_email">
        @csrf
            <button type="submit">メールを送信する</button>
        </form>
    </div>
@endsection