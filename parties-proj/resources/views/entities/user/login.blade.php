@extends('header')

@section('content')
    <div class="m-4 px-4">

        <div class="border shadow-xl rounded-md p-8 flex flex-row justify-center">
            <form action="/users/authenticate" method="POST" class="w-2/3 flex flex-col space-y-6">
                @csrf

                <h1 class="text-2xl font-bold text-center">Войти</h1>

                {{-- email --}}
                <div class="flex items-center space-x-2">
                    <label for="email" class="">
                        email
                    </label>
                    <input type="email" name="email" class="w-full p-4 text-gray-900 border rounded-md"
                        value="{{ old('email') }}">
                </div>
                @error('email')
                    <p class="text-red-500">
                        {{ $message }}
                    </p>
                @enderror

                {{-- password --}}
                <div class="flex items-center space-x-2">
                    <label for="password" class="">
                        пароль
                    </label>
                    <input type="password" name="password" class="w-full p-4 text-gray-900 border rounded-md">
                </div>
                @error('password')
                    <p class="text-red-500">
                        {{ $message }}
                    </p>
                @enderror

                <button type="submit"
                    class="px-6 py-4 my-2 w-fit self-center rounded-md flex space-x-2 transition duration-200 bg-slate-100 hover:drop-shadow-md">
                    Войти
                </button>

                <p>
                    Нет аккаунта? <a href="/register" class="font-bold transition duration-200 hover:drop-shadow-md">Регистрация</a>
                </p>
            </form>
        </div>
    </div>
@endsection