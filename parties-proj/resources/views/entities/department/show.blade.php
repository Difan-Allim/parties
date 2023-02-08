@extends('header')
@section('content')
    <p>{{$department->id}}</p>
    <p>{{$department->number}}</p>
    <p>{{$department->phone_number}}</p>
    <p>{{$department->address}}</p>
    <p>{{$department->city->title}}</p>
    <p>{{$department->organisation->title}}</p>

    <x-edit-delete-entry href="/departments/{{$department->id}}" />
@endsection