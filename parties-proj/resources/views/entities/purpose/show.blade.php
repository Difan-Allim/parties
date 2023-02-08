@extends('header')
@section('content')
    <p>{{$purpose->id}}</p>
    <p>{{$purpose->title}}</p>
    <x-edit-delete-entry href="/purposes/{{$purpose->id}}" />
@endsection