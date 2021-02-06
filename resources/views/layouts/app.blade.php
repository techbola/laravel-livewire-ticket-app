<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Livewire App Tutorial</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3f3be2a3a3.js" crossorigin="anonymous"></script>
    @livewireStyles
    @livewireScripts

    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script>

</head>

<body class="flex flex-wrap justify-center">

    <div class="flex w-full justify-between px-4 bg-purple-900 text-white">
        <a class="mx-3 py-4" href="/">Home</a>
        <div class="py-4">
            @guest
                <a class="mx-3" href="/login">Login</a>
                <a class="mx-3" href="/register">Register</a>
            @endguest
            @auth
                <livewire:logout />
            @endauth
        </div>
    </div>

    <div class="my-10 w-full flex justify-center">
        {{ $slot }}
    </div>

</body>
</html>
