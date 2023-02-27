@extends('header')
@section('content')
<div class="flex flex-col justify-center m-8 space-y-8">
    <div>
        <span class="font-bold">id:</span>
        <span>{{$social->id}}</span>
    </div>
    <div>
        <span class="font-bold">название:</span>
        <span> {{$social->title}}</span>
    </div>
    
    <x-edit-delete-entry href="/socials/{{$social->id}}" />
</div>
@endsection