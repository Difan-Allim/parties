@extends('header')

@section('content')
    <p>{{$document->id}}</p>
    <p>{{$document->title}}</p>
    <p>{{$document->since_date}}</p>
    <p>{{$document->purpose->title}}</p>
    <p>{{$document->organisation->title}}</p>

    <x-edit-delete-entry href="/documents/{{$document->id}}" />
@endsection