@extends('header')

@section('content')
    <form action="/discounts" method="POST" class="w-2/3 flex flex-col space-y-6">
        @csrf

        <input type="text" name="user_id" value="2" class="hidden">

        <h1 class="text-2xl font-bold text-center">Добавить акцию</h1>

        {{-- title --}}
        <x-input-box colname="название" colname_form="title" input_value="{{ old('title') }}" />
        @error('title')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror

        {{-- company_id type_id --}}
        <x-input-box-search colname="Тип акции" colname_form="type_id" input_value="{{ old('type_id') }}">
            @foreach ($types as $type)
                <li class="ledger-search-li cursor-pointer p-2 m-1 rounded-md transition duration-200 hover:bg-slate-300"
                    value="{{ $type->id }}">{{ $type->title }}</li>
            @endforeach
        </x-input-box-search>
        @error('type_id')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror

        {{-- grade_id organisation_id --}}
        <x-input-box-search colname="Название организации" colname_form="organisation_id" input_value="{{ old('organisation_id') }}">
            @foreach ($organisations as $organisation)
                <li class="ledger-search-li cursor-pointer p-2 m-1 rounded-md transition duration-200 hover:bg-slate-300"
                    value="{{ $organisation->id }}">{{ $organisation->title }}</li>
            @endforeach
        </x-input-box-search>
        @error('organisation_id')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror

        {{-- ingredients event_date--}}
        <x-input-box colname="дата проведения" colname_form="event_date" input_value="{{ old('event_date') }}" type="date"/>
        @error('event_date')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror

        {{-- weight money --}}
        <x-input-box colname="цена" colname_form="money" input_value="{{ old('money') }}" type="decimal"/>
        @error('money')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror

        {{-- price count_m --}}
        <x-input-box colname="численность" colname_form="count_m" input_value="{{ old('count_m') }}" type="number"/>
        @error('count_m')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror

        <button type="submit" class="px-6 py-4 my-2 w-fit self-center rounded-md flex space-x-2 transition duration-200 bg-slate-100 hover:drop-shadow-md">
            Добавить
        </button>
    </form>
@endsection