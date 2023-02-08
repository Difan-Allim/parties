@extends('header')

@section('content')
    <form action="/members/{{$member->id}}" method="POST" class="w-2/3 flex flex-col space-y-6">
        @csrf
        @method('PUT')

        <h1 class="text-2xl font-bold text-center">Изменить представителя</h1>

        {{-- surname --}}
        <x-input-box colname="фамилия" colname_form="surname" input_value="{{ $member->surname }}" />
        @error('surname')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror

        {{-- name --}}
        <x-input-box colname="имя" colname_form="name" input_value="{{ $member->name }}" />
        @error('name')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror

        {{-- patronym --}}
        <x-input-box colname="отчество" colname_form="patronym" input_value="{{ $member->patronym }}" />
        @error('patronym')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror
        
        {{-- birth_date --}}
        <x-input-box colname="дата рождения" colname_form="birth_date" input_value="{{ $member->birth_date }}" type="date"/>
        @error('birth_date')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror

        {{-- social_id --}}
        <x-input-box-search colname="Социальное положение" colname_form="social_id" input_value="{{ $member->social->id }}">
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
        @php
            $departmentsArr = [];
            foreach ($member->departments as $department) {
                array_push($departmentsArr, $department->id);
            }

            $departmentsStr = implode(',', $departmentsArr);
        @endphp
        <x-input-box-multiple colname="предприятия" colname_form="department_id" input_value="{{ $departmentsStr }}">
            @foreach ($departments as $department)
                <li class="ledger-multiple-li cursor-pointer p-2 m-1 rounded-md transition duration-200 hover:bg-slate-300"
                    value="{{ $department->id }}" title="{{ $department->number }}">
                    {{ $department->number }}</li>
            @endforeach
        </x-input-box-multiple>
        @error('department_id')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror

        <button type="submit"
            class="px-6 py-4 my-2 w-fit self-center rounded-md flex space-x-2 transition duration-200 bg-slate-100 hover:drop-shadow-md">
            Изменить
        </button>