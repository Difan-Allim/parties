@extends('header')

@section('content')

<div class="flex flex-col justify-center m-8 space-y-8">
    <div>
        <span class="font-bold">id:</span>
        <span>{{$organisation->id}}</span>
    </div>
    <div>
        <span class="font-bold">название:</span>
        <span> {{$organisation->title}}</span>
    </div>
    <div>
        <span class="font-bold">дата основания:</span>
        <span> {{$organisation->holding_date}}</span>
    </div>
    <div>
        <span class="font-bold">тип орг.:</span>
        <span> {{$organisation->legal->title}}</span>
    </div>
    
    <x-edit-delete-entry href="/organisations/{{$organisation->id}}" />
</div>

@endsection