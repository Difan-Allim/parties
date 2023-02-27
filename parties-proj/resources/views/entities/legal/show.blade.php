@extends('header')
@section('content')

<div class="flex flex-col justify-center m-8 space-y-8">
    <div>
        <span class="font-bold">id:</span>
        <span>{{$legal->id}}</span>
    </div>
    <div>
        <span class="font-bold">название:</span>
        <span> {{$legal->title}}</span>
    </div>
    
    <x-edit-delete-entry href="/legals/{{$legal->id}}" />
</div>
@endsection