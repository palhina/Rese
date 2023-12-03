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
                    <li><a href="/">Home</a></li>
                    <li>
                        <form class="form" action="/logout/user" method="post">
                        @csrf
                            <button class="header-nav__button">Logout</button>
                        </form>
                    </li>
                    <li>
                        <form class="form" action="/my_page" method="get">
                        @csrf
                            <button class="my_page">Mypage</button>
                        </form>
                    </li>
                @elseif(Auth::guard('managers')->check())
                    <li><a href="/create_shop">店舗情報の新規作成</a></li>
                    <li><a href="/edit_shop">店舗情報一覧</a></li>
                    <li>
                        <form class="form" action="/logout/manager" method="post">
                        @csrf
                            <button class="header-nav__button">Logout</button>
                        </form>
                    </li>
                @elseif(Auth::guard('admins')->check())
                    <li>
                        <form class="form" action="/logout/admin" method="post">
                        @csrf
                            <button class="header-nav__button">Logout</button>
                        </form>
                    </li>
                @else
                    <li><a href="/">Home</a></li>
                    <li><a href="/register/user">Registration</a></li>
                    <li><a href="/login/user">Login</a></li>
                    <li><a href="/login/manager">店舗代表の方</a></li>
                    <li><a href="/login/admin">管理メニュー</a></li>
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