@extends('header')
@section('content')
    <p>{{$member->id}}</p>
    <p>{{$member->surname}}</p>
    <p>{{$member->name}}</p>
    <p>{{$member->patronym}}</p>
    <p>{{$member->birth_date}}</p>
    <p>{{$member->social->title}}</p>

    <x-edit-delete-entry href="/members/{{$member->id}}" />
@endsection