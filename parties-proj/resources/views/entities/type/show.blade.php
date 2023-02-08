@extends('header')

@section('content')
    <p>{{$type->id}}</p>
    <p>{{$type->title}}</p>
    <x-edit-delete-entry href="/types/{{$type->id}}" />
@endsection