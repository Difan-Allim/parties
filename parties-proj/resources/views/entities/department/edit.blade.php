@extends('header')

@section('content')
<div class="flex justify-center ">
    <form action="/departments/{{$department->id}}" method="POST" class="w-2/3 flex flex-col space-y-6">
        @csrf
        @method('PUT')

        <h1 class="text-2xl font-bold text-center">Изменить штаб</h1>

        {{-- number --}}
        <x-input-box colname="номер" colname_form="number" input_value="{{ $department->number }}" />
        @error('number')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror

        {{-- city_id --}}
        <x-input-box-search colname="Город" colname_form="city_id" input_value="{{ $department->city->id }}">
            @foreach ($cities as $city)
                <li class="ledger-search-li cursor-pointer p-2 m-1 rounded-md transition duration-200 hover:bg-slate-300"
                    value="{{ $city->id }}">{{ $city->title }}</li>
            @endforeach
        </x-input-box-search>
        @error('city_id')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror

        {{-- city_id --}}
        <x-input-box-search colname="Название организации" colname_form="organisation_id" input_value="{{ $department->organisation->id }}">
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

        {{-- phone_number--}}
        <x-input-box colname="Номер телефона" colname_form="phone_number" input_value="{{ $department->phone_number }}"/>
        @error('phone_number')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror

        {{-- address --}}
        <x-input-box colname="Адрес" colname_form="address" input_value="{{ $department->address }}" />
        @error('address')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror

       {{-- member multiselect --}}
       @php
            $membersArr = [];
            foreach ($department->members as $member) {
                array_push($membersArr, $member->id);
            }

            $membersStr = implode(',', $membersArr);
        @endphp
       <x-input-box-multiple colname="владельцы" colname_form="member_id" input_value="{{ $membersStr }}">
        @foreach ($members as $member)
            <li class="ledger-multiple-li cursor-pointer p-2 m-1 rounded-md transition duration-200 hover:bg-slate-300"
                value="{{ $member->id }}">{{ $member->surname }} {{ $member->name }} {{ $member->patronym }}</li>
        @endforeach
        </x-input-box-multiple>
        @error('member_id')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror

        <button type="submit" class="px-6 py-4 my-2 w-fit self-center rounded-md flex space-x-2 transition duration-200 bg-slate-100 hover:drop-shadow-md">
            Изменить
        </button>
    </form>
</div>
@endsection