@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
    <div class="register__content">
        <div class="register__group-title">
            <h2>Registration</h2>
        </div>
        <!-- form class="form" action="/register" method="post" csrf-->
            
            <div class="register__form-content">
                <div class="form__name-input">
                    <div class="form__name-text">
                        <input type="text" name="name" value="" placeholder="Username" />
                    </div>
                    <!-- <div class="form__error">
                        {{$errors->first('name')}}
                    </div> -->
                </div>
                <div class="form__email-input">
                    <div class="form__email-text">
                        <input type="email" name="email" value="" placeholder="Email" />
                    </div>
                    <!-- <div class="form__error">
                        {{$errors->first('email')}}
                    </div> -->
                </div>
                <div class="form__pwd-input">
                    <div class="form__pwd-text">
                        <input type="password" name="password" placeholder="Password" />
                    </div>
                    <!-- <div class="form__error">
                        {{$errors->first('password')}}
                    </div> -->
                </div>
                <div class="form__button">
                    <button class="form__button-register" type="submit">登録</button>
                </div>
            </div>
        <!-- /form -->
    </div>
@endsection

