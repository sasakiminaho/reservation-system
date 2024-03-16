<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css//layouts/app2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    @yield('css')
</head>
<body>
    <div class="reservation">
        <header class="header">
            <div class="header-title">
                <a href="/menu" class="header-title-logo">Rese</a>
            </div>
        </header>
        <div class="search">
            <form action="{{ route('keyword') }}" method="get" class="search-box">
                @csrf
                <div class="search-select_box">
                    <select name="area" value="area" class="search-box-area">
                        <option value="" >All area</option>
                        <option value="東京都">東京都</option>
                        <option value="大阪府">大阪府</option>
                        <option value="福岡県">福岡県</option>
                    </select>
                    <select name="genre" value="genre" class="search-box-genre">
                        <option value="">All genre</option>
                        <option value="寿司">寿司</option>
                        <option value="焼肉">焼肉</option>
                        <option value="ラーメン">ラーメン</option>
                        <option value="居酒屋">居酒屋</option>
                        <option value="イタリアン">イタリアン</option>
                    </select>
                    <button type="submit" id="search" class="search_button"><img src="{{ asset('img/search.png') }}" alt="" width="20px" height="20px" class="button"></button>
                </div>
                <div class="search-box-word">
                    <input type="text" name="search" placeholder="Search..." class="search-box-word_box">
                </div>
            </form>
        </div>
    </div>
    <main>
        <body>
            @yield('content')
        </body>
    </main>
</body>
</html>