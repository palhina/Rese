<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <input type="checkbox" id="overlay-input" />
        <label for="overlay-input" id="overlay-button"><span></span></label>
        <div id="overlay">
            <ul>
                @if (Auth::check())
                <li><a href="#">Home</a></li>
                <li>
                    <form class="form" action="/logout" method="post">
                    @csrf
                        <button class="header-nav__button">Logout</button>
                    </form>
                </li>
                <li><a href="#">Mypage</a></li>
                @else
                <li><a href="#">Home</a></li>
                <li><a href="/register">Registration</a></li>
                <li><a href="/login">Login</a></li>
                @endif
            </ul>
        </div>
        <div class="header-ttl">
            <h1>Rese</h1>
        </div>
    </header>
    
    <main class="main">
        @yield('content')
    </main>
</body>

</html>