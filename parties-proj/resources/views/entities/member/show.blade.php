@extends('header')

@section('content')

<div class="flex flex-col justify-center m-8 space-y-8">
    <div>
        <span class="font-bold">id:</span>
        <span>{{$member->id}}</span>
    </div>
    <div>
        <span class="font-bold">фамилия:</span>
        <span> {{$member->surname}}</span>
    </div>
    <div>
        <span class="font-bold">имя:</span>
        <span> {{$member->name}}</span>
    </div>
    <div>
        <span class="font-bold">отчество:</span>
        <span> {{$member->patronym}}</span>
    </div>
    <div>
        <span class="font-bold">дата рождения:</span>
        <span> {{$member->birth_date}}</span>
    </div>
    <div>
        <span class="font-bold">соц. положения:</span>
        <span> {{$member->social->title}}</span>
    </div>
    
    <x-edit-delete-entry href="/members/{{$member->id}}" />
</div>
@endsection
