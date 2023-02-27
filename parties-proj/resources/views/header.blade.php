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
        <a href="/" class="m-2 p-2 rounded-md transition duration-200 hover:bg-slate-100">
            <span class="font-bold">
                Главная
            </span>
        </a>
        <a href="/queries" class="m-2 p-2 rounded-md transition duration-200 hover:bg-slate-100">
            <span class="font-bold">
                Запросы
            </span>
        </a>
        @auth
            
            <p class="m-2 p-2"><i>Добро пожаловать</i>, <b class=" hover:bg-slate-100">{{ auth()->user()->name }}</b></p>

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
    <div class="flex justify-center flex-wrap">
        <a href="/cities" class="m-2 p-2 rounded-md transition duration-200 hover:bg-slate-100">
            <span class="">
                Города
            </span>
        </a>
        <a href="/legals" class="m-2 p-2 rounded-md transition duration-200 hover:bg-slate-100">
            <span class="">
                Типы организации
            </span>
        </a>
        <a href="/types" class="m-2 p-2 rounded-md transition duration-200 hover:bg-slate-100">
            <span class="">
                Типы акций
            </span>
        </a>
        <a href="/socials" class="m-2 p-2 rounded-md transition duration-200 hover:bg-slate-100">
            <span class="">
                Социальное положение
            </span>
        </a>
        <a href="/purposes" class="m-2 p-2 rounded-md transition duration-200 hover:bg-slate-100">
            <span class="">
                Направленность документов
            </span>
        </a>
        <a href="/members" class="m-2 p-2 rounded-md transition duration-200 hover:bg-slate-100">
            <span class="">
                Представители
            </span>
        </a>
        <a href="/organisations" class="m-2 p-2 rounded-md transition duration-200 hover:bg-slate-100">
            <span class="">
                Организации
            </span>
        </a>
        <a href="/discounts" class="m-2 p-2 rounded-md transition duration-200 hover:bg-slate-100">
            <span class="">
                Акции
            </span>
        </a>
        <a href="/documents" class="m-2 p-2 rounded-md transition duration-200 hover:bg-slate-100">
            <span class="">
                Документы
            </span>
        </a>
        <a href="/departments" class="m-2 p-2 rounded-md transition duration-200 hover:bg-slate-100">
            <span class="">
                Штабы
            </span>
        </a>
    </div>
    @yield('content')

</body>
</html>