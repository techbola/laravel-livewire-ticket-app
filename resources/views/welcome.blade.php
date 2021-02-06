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
</head>

<body class="flex justify-center">
    <div class="w-10/12 my-10 flex">
        <div class="w-5/12 rounded border p-2">
            <livewire:tickets />
        </div>
        <div class="w-7/12 rounded border p-2">
            <livewire:comments />
        </div>
    </div>

{{--    @livewire('comments')--}}

</body>
</html>
