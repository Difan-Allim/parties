@extends('header')
@section('content')
    <p>{{$legal->id}}</p>
    <p>{{$legal->title}}</p>
    <x-edit-delete-entry href="/legals/{{$legal->id}}" />
@endsection