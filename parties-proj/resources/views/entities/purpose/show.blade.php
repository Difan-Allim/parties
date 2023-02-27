@extends('header')
@section('content')

<div class="flex flex-col justify-center m-8 space-y-8">
    <div>
        <span class="font-bold">id:</span>
        <span>{{$purpose->id}}</span>
    </div>
    <div>
        <span class="font-bold">название:</span>
        <span> {{$purpose->title}}</span>
    </div>
    
    <x-edit-delete-entry href="/purposes/{{$purpose->id}}" />
</div>
@endsection