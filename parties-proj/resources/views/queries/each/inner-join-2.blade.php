@extends('header')

@section('title')
    Запрос
@endsection

@section('content')
    <div class="m-4 p-4">
        <div class="border shadow-xl rounded-md p-8 flex flex-row justify-center">
            <div class="flex flex-col justify-between space-y-4 pr-4">

                <form action="inner_join_2" method="POST" class="space-y-4 flex flex-col justify-between">
                    @csrf

                    <h1 class="text-center text-xl font-bold">Вывод всех организаций которые находяться в таком-то городе</h1>

                    <x-input-box-query-search var="city">
                        @foreach ($cities as $city)
                            <li class="ledger-search-li cursor-pointer p-2 m-1 rounded-md transition duration-200 hover:bg-slate-300"
                                value="{{ $city->id }}">{{ $city->title }}</li>
                        @endforeach
                    </x-input-box-query-search>

                    <button type="submit" class="px-6 py-4 my-2 w-fit self-center rounded-md flex space-x-2 transition duration-200 bg-slate-100 hover:drop-shadow-md">
                        Поиск
                    </button>
                </form>

            </div>
        </div>
    </div>
@endsection
