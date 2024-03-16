<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css//layouts/app1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    @yield('css')
</head>
<body>
    <div class="reservation">
        <header class="header">
            <div class="header-title">
                <a href="/menu" class="header-title-logo"><image src="{{ asset('img/rese.png') }}" alt="mail" width="35px" height="35px" class="rese" >Rese</a>
            </div>
        </header>
    </div>
    <main>
        <body>
            @yield('content')
        </body>
    </main>
</body>
</html>