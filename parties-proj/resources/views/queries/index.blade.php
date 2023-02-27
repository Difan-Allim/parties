@extends('header')

@section('title')
    Запросы
@endsection

@section('content')
    <div class="m-4 px-4">

        <div class="border shadow-xl rounded-md p-8 flex flex-row justify-center">
            <div class="flex flex-col justify-between space-y-4 pr-4 text-right">

                <h1 class="text-center text-xl font-bold">Лабораторная №5</h1>

                <a href="queries/inner_join_1"
                    class="px-6 py-4 my-2 rounded-md flex space-x-2 transition duration-200 bg-slate-100 hover:drop-shadow-md">
                    <span>
                        Симметричное внутреннее соединение с условием отбора по внешнему ключу 1/2
                    </span>
                </a>

                <a href="queries/inner_join_2"
                    class="px-6 py-4 my-2 rounded-md flex space-x-2 transition duration-200 bg-slate-100 hover:drop-shadow-md">
                    <span>
                        Симметричное внутреннее соединение с условием отбора по внешнему ключу 2/2
                    </span>
                </a>

                <a href="queries/inner_join_3"
                    class="px-6 py-4 my-2 rounded-md flex space-x-2 transition duration-200 bg-slate-100 hover:drop-shadow-md">
                    <span>
                        Симметричное внутреннее соединение с условием отбора по датам 1/2
                    </span>
                </a>

                <a href="queries/inner_join_4"
                    class="px-6 py-4 my-2 rounded-md flex space-x-2 transition duration-200 bg-slate-100 hover:drop-shadow-md">
                    <span>
                        Симметричное внутреннее соединение с условием отбора по датам 2/2
                    </span>
                </a>

                <a href="queries/inner_join_5"
                    class="px-6 py-4 my-2 rounded-md flex space-x-2 transition duration-200 bg-slate-100 hover:drop-shadow-md">
                    <span>
                        Симметричное внутреннее соединение без условия 1/3
                    </span>
                </a>

                <a href="queries/inner_join_6"
                    class="px-6 py-4 my-2 rounded-md flex space-x-2 transition duration-200 bg-slate-100 hover:drop-shadow-md">
                    <span>
                        Симметричное внутреннее соединение без условия 2/3
                    </span>
                </a>

                <a href="queries/inner_join_7"
                    class="px-6 py-4 my-2 rounded-md flex space-x-2 transition duration-200 bg-slate-100 hover:drop-shadow-md">
                    <span>
                        Симметричное внутреннее соединение без условия 3/3
                    </span>
                </a>

                <a href="queries/left_join"
                    class="px-6 py-4 my-2 rounded-md flex space-x-2 transition duration-200 bg-slate-100 hover:drop-shadow-md">
                    <span>
                        Левое внешнее соединение
                    </span>
                </a>

                <a href="queries/right_join"
                    class="px-6 py-4 my-2 rounded-md flex space-x-2 transition duration-200 bg-slate-100 hover:drop-shadow-md">
                    <span>
                        Правое внешнее соединение
                    </span>
                </a>

                <a href="queries/select_in_select"
                    class="px-6 py-4 my-2 rounded-md flex space-x-2 transition duration-200 bg-slate-100 hover:drop-shadow-md">
                    <span>
                        Запрос на запросе по принципу левого соединения
                    </span>
                </a>

                <h1 class="text-center text-xl font-bold">Лабораторная №6</h1>

                <a href="queries/aggregate_no_condition"
                    class="px-6 py-4 my-2 rounded-md flex space-x-2 transition duration-200 bg-slate-100 hover:drop-shadow-md">
                    <span>
                        Итоговый запрос без условия
                    </span>
                </a>

                <a href="queries/aggregate_condition_data"
                    class="px-6 py-4 my-2 rounded-md flex space-x-2 transition duration-200 bg-slate-100 hover:drop-shadow-md">
                    <span>
                        Итоговый запрос с условием на данные
                    </span>
                </a>

                <a href="queries/aggregate_condition_group"
                    class="px-6 py-4 my-2 rounded-md flex space-x-2 transition duration-200 bg-slate-100 hover:drop-shadow-md">
                    <span>
                        Итоговый запрос с условием на группы
                    </span>
                </a>

                <a href="queries/aggregate_condition_both"
                    class="px-6 py-4 my-2 rounded-md flex space-x-2 transition duration-200 bg-slate-100 hover:drop-shadow-md">
                    <span>
                        Итоговый запрос с условием на данные и на группы
                    </span>
                </a>

                <a href="queries/aggregate_mishmash"
                    class="px-6 py-4 my-2 rounded-md flex space-x-2 transition duration-200 bg-slate-100 hover:drop-shadow-md">
                    <span>
                        Запрос на запросе по принципу итогового запроса
                    </span>
                </a>

                <a href="queries/aggregate_subquery"
                    class="px-6 py-4 my-2 rounded-md flex space-x-2 transition duration-200 bg-slate-100 hover:drop-shadow-md">
                    <span>
                        Запрос с подзапросом
                    </span>
                </a>

            </div>

        </div>

    </div>
@endsection
