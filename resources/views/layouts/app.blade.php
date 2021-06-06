<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Laravel App - @yield('title')</title>
</head>
<body onload="init();">
    <nav class="navbar d-flex flex-row">
        <h3 class="m-0 p-0">Laravel Playground</h3>
        <div class="m-2">
            <a href="/" class="text-decoration-none text-white">Home</a>
            |
            <a href="/about" class="text-decoration-none text-white">About</a>
            |
            <a href="/posts" class="text-decoration-none text-white">Posts</a>
            |
            <a href="/posts/create" class="text-decoration-none text-white">Add new post</a>
        </div>
    </nav>
    <div class="container">
        @yield('content')
        @if(session('status'))
            <div class="card p-2 m-2 bg-success text-white" id="alert">
                    {{ session('status') }}
            </div>
            <script>
                const fadeTarget = document.getElementById("alert");
                setTimeout(() => {
                    fadeTarget.classList.toggle('fade');
                    setTimeout(() => {
                        fadeTarget.style.display = 'none';
                    }, 500);
                }, 2000);
            </script>
        @endif
    </div>
</body>
</html>
