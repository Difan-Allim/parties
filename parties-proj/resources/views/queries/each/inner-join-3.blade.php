@extends('header')

@section('title')
    Запрос
@endsection

@section('content')
    <div class="m-4 p-4">
        <div class="border shadow-xl rounded-md p-8 flex flex-row justify-center">
            <div class="flex flex-col justify-between space-y-4 pr-4">

                <form action="inner_join_3" method="POST" class="space-y-4 flex flex-col justify-between">
                    @csrf

                    <h1 class="text-center text-xl font-bold">Вывод всех организаций которые провели акции по указанной дате</h1>

                    <x-input-box-query var="date" type="date"></x-input-box-query>

                    <button type="submit" class="px-6 py-4 my-2 w-fit self-center rounded-md flex space-x-2 transition duration-200 bg-slate-100 hover:drop-shadow-md">
                        Поиск
                    </button>
                </form>

            </div>
        </div>
    </div>
@endsection
