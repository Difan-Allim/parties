@extends('header')

@section('content')
<div class="flex justify-center ">
    <form action="/documents/{{$document->id}}" method="POST" class="w-2/3 flex flex-col space-y-6">
        @csrf
        @method('PUT')
        <input type="text" name="user_id" value="{{ auth()->user()->id }}" class="hidden">

        <h1 class="text-2xl font-bold text-center">Изменить документ</h1>

        {{-- title --}}
        <x-input-box colname="название" colname_form="title" input_value="{{ $document->title }}" />
        @error('title')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror

        {{-- company_id purpose_id --}}
        <x-input-box-search colname="Направленность" colname_form="purpose_id" input_value="{{ $document->purpose->id }}">
            @foreach ($purposes as $purpose)
                <li class="ledger-search-li cursor-pointer p-2 m-1 rounded-md transition duration-200 hover:bg-slate-300"
                    value="{{ $purpose->id }}">{{ $purpose->title }}</li>
            @endforeach
        </x-input-box-search>
        @error('purpose_id')
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror

        {{-- grade_id organisation_id --}}
        <x-input-box-search colname="Название организации" colname_form="organisation_id" input_value="{{ $document->organisation->id }}">
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

        {{-- ingredients since_date--}}
        <x-input-box colname="дата выпуска" colname_form="since_date" input_value="{{ $document->since_date }}" type="date"/>
        @error('since_date')
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