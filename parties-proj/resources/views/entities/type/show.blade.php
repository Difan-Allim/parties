@extends('header')

@section('content')

<div class="flex flex-col justify-center m-8 space-y-8">
    <div>
        <span class="font-bold">id:</span>
        <span>{{$type->id}}</span>
    </div>
    <div>
        <span class="font-bold">название:</span>
        <span> {{$type->title}}</span>
    </div>
    
    <x-edit-delete-entry href="/types/{{$type->id}}" />
</div>

@endsection