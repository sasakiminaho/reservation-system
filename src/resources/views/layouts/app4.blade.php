<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css//layouts/app4.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    @yield('css')
    <title>Rese</title>
</head>
<body>
    <header class="header">
        <div class="header-button">
            <a href="#" onclick="history.back()" class="button-icon"><p>&#215;</p></a>
        </div>
    </header>
    <main>
        <body>
            @yield('content')
        </body>
    </main>
</body>
</html>