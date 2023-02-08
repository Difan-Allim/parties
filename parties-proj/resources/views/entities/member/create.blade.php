@extends('header')

@section('content')
    <form action="/members" method="POST" class="w-2/3 flex flex-col space-y-6">
        @csrf

        <h1 class="text-2xl font-bold text-center">Добавить акцию</h1>

        {{-- surname --}}
        <x-input-box colname="Фамилия" colname_form="surname" input_value="{{ old('surname') }}" />
        @error('surname')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror

        {{-- name--}}
        <x-input-box colname="Имя" colname_form="name" input_value="{{ old('name') }}"/>
        @error('name')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror

        {{-- patronym --}}
        <x-input-box colname="Отчество" colname_form="patronym" input_value="{{ old('patronym') }}" />
        @error('patronym')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror

        {{-- birth_date --}}
        <x-input-box colname="Дата рождения" colname_form="birth_date" input_value="{{ old('birth_date') }}" type="date"/>
        @error('birth_date')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror

        {{-- social_id --}}
        <x-input-box-search colname="Социальное положение" colname_form="social_id" input_value="{{ old('social_id') }}">
            @foreach ($socials as $social)
                <li class="ledger-search-li cursor-pointer p-2 m-1 rounded-md transition duration-200 hover:bg-slate-300"
                    value="{{ $social->id }}">{{ $social->title }}</li>
            @endforeach
        </x-input-box-search>
        @error('social_id')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror

       {{-- department multiselect --}}
       <x-input-box-multiple colname="Штабы" colname_form="department_id" input_value="{{ old('department_id') }}">
        @foreach ($departments as $department)
            <li class="ledger-multiple-li cursor-pointer p-2 m-1 rounded-md transition duration-200 hover:bg-slate-300"
                value="{{ $department->id }}">{{ $department->number }}</li>
        @endforeach
        </x-input-box-multiple>
        @error('department_id')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror

        <button type="submit" class="px-6 py-4 my-2 w-fit self-center rounded-md flex space-x-2 transition duration-200 bg-slate-100 hover:drop-shadow-md">
            Добавить
        </button>
    </form>
@endsection