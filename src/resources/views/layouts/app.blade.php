<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="logo">ロゴ画像</div>

        <form class="search-form" action="/search_shop" method="get">
            <div class="search-box">
                <input class="search-box__input" type="text" name="keyword" placeholder="何をお探しですか？" value="{{request()->keyword}}">
            </div>
        </form>

        <!-- ログイン中の表示 -->
        @auth
        <form action="/logout" method="post">
            @csrf
            <div class="logout">
                <input class="logout-button" type="submit" value="Logout">
            </div>
        </form>
        @endauth

        <!-- ログイン前の表示 -->
        @guest
        <div class="login">
            <a class="login-link" href="/login">Login</a>
        </div>
        @endguest

        <div class="mypage">
            <a class="mypage-link" href="/mypage">Mypage</a>
        </div>

        <div class="sell">
            <a class="sell-link" href="/sell">出品</a>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>