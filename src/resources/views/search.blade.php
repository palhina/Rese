@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/shop_all.css') }}">
@endsection

@section('content')
<div class="shop-all__wrapper">
    <div class="search-form">
        <div class="search-form__area">
            <select class="search__area" name="area">
                <option value="">All area</option>
            </select>
        </div>
        <div class="search-form__genre">
            <select class="search__genre" name="genre">
                <option value="">All genre</option>
            </select>
        </div>
        <div class="search-form__keyword">
            <input class="search__key" type="text" name="keyword" placeholder="Search...">
        </div>
        <button class="search__btn" type="submit">Search</button>
    </div>
@yield('result')
</div>
@endsection