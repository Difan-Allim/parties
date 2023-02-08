<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="/css/style.css">
    <title>
        @yield('title')
    </title>
</head>
<body>
    <x-flash-message />
    <div class="flex justify-center">
        @auth
            <p class="m-2 p-2">Добро пожаловать, {{ auth()->user()->name }}</p>

            <a href="/profile" class="m-2 p-2 rounded-md transition duration-200 hover:bg-slate-100">
                <span class="font-bold">
                    Профиль
                </span>
            </a>

            <form action="/logout" method="POST">
                @csrf

                <button type="submit" class="m-2 p-2 rounded-md transition duration-200 hover:bg-slate-100">
                    <span class="font-bold">
                        Выйти
                    </span>
                </button>
            </form>
        @else
            <a href="/login" class="m-2 p-2 rounded-md transition duration-200 hover:bg-slate-100">
                <span class="font-bold">
                    Войти
                </span>
            </a>
            <a href="/register" class="m-2 p-2 rounded-md transition duration-200 hover:bg-slate-100">
                <span class="font-bold">
                    Регистрация
                </span>
            </a>
        @endauth
    </div>

    @yield('content')

</body>
</html>