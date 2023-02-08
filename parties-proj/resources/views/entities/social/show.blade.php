@extends('header')
@section('content')
    <p>{{$social->id}}</p>
    <p>{{$social->title}}</p>
    <x-edit-delete-entry href="/socials/{{$social->id}}" />
@endsection