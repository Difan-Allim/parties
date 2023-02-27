@extends('header')

@section('title')
    Запрос
@endsection

@section('content')
    <div class="m-4 p-4">
        <div class="border shadow-xl rounded-md p-8 flex flex-row justify-center">
            <div class="flex flex-col justify-between space-y-4 pr-4">

                <form action="aggregate_condition_data" method="POST" class="space-y-4 flex flex-col justify-between">
                    @csrf

                    <h1 class="text-center text-xl font-bold">Количество документов определённой направленности, опубликованые организациями</h1>

                    <x-input-box-query-search var="purpose">
                        @foreach ($purposes as $purpose)
                            <li class="ledger-search-li cursor-pointer p-2 m-1 rounded-md transition duration-200 hover:bg-slate-300"
                                value="{{ $purpose->id }}">{{ $purpose->title }}</li>
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
