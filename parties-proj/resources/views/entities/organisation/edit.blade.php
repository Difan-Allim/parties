@extends('header')

@section('content')
    <form action="/organisations/{{$organisation->id}}" method="POST" class="w-2/3 flex flex-col space-y-6">
        @csrf
        @method('PUT')
        <input type="text" name="user_id" value="2" class="hidden">

        <h1 class="text-2xl font-bold text-center">Изменить документ</h1>

        {{-- title --}}
        <x-input-box colname="название" colname_form="title" input_value="{{ $organisation->title }}" />
        @error('title')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror

        {{-- legal_id --}}
        <x-input-box-search colname="тип собственности" colname_form="legal_id" input_value="{{ $organisation->legal->id }}">
            @foreach ($legals as $legal)
                <li class="ledger-search-li cursor-pointer p-2 m-1 rounded-md transition duration-200 hover:bg-slate-300"
                    value="{{ $legal->id }}">{{ $legal->title }}</li>
            @endforeach
        </x-input-box-search>
        @error('legal_id')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror

        {{-- holding_date--}}
        <x-input-box colname="дата основания" colname_form="holding_date" input_value="{{ $organisation->holding_date }}" type="date"/>
        @error('holding_date')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror

        <button type="submit" class="px-6 py-4 my-2 w-fit self-center rounded-md flex space-x-2 transition duration-200 bg-slate-100 hover:drop-shadow-md">
            Изменить
        </button>
    </form>
@endsection