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
                    <li><a href="/payment/create">Payment</a></li>
                @elseif(Auth::guard('managers')->check())
                    <h2>ようこそ、{{ Auth::guard('managers')->user()->name }}さん</h2>
                    <p>店舗代表者権限でログイン中</p>
                    <li><a href="/check_shop">店舗情報作成・更新</a></li>
                    <li><a href="/booking_confirmation">予約確認</a></li>
                    <li>
                        <form class="form" action="/logout/manager" method="post">
                        @csrf
                            <button class="header-nav__button">Logout</button>
                        </form>
                    </li>
                @elseif(Auth::guard('admins')->check())
                    <h2>ようこそ、{{ Auth::guard('admins')->user()->name }}さん</h2>
                    <h3>管理者権限でログイン中</h3>
                    <li><a href="/register/manager">店舗代表者新規作成</a></li>
                    <li><a href="/send_email">メール送信</a></li>
                    <li>
                        <form class="form" action="/logout/admin" method="post">
                        @csrf
                            <button class="header-nav__button">Logout</button>
                        </form>
                    </li>
                @else
                    <h3>現在ログインしていません</h3> 
                    <li><a href="/">Home</a></li>
                    <li><a href="/register/user">Registration</a></li>
                    <li><a href="/login/user">Login</a></li>
                    <li><a href="/two_factor_auth/login_form">Login(二段階認証機能使用)</a></li>
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