@extends('header')
@section('content')
    <p>{{$city->id}}</p>
    <p>{{$city->title}}</p>
    <x-edit-delete-entry href="/cities/{{$city->id}}" />
@endsection