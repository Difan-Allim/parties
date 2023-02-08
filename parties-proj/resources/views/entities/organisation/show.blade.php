@extends('header')

@section('content')
    <p>{{$organisation->id}}</p>
    <p>{{$organisation->title}}</p>
    <p>{{$organisation->holding_date}}</p>
    <p>{{$organisation->legal->title}}</p>

    <x-edit-delete-entry href="/organisations/{{$organisation->id}}" />
@endsection