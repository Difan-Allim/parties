@extends('header')

@section('content')
    <p>{{$discount->id}}</p>
    <p>{{$discount->title}}</p>
    <p>{{$discount->event_date}}</p>
    <p>{{$discount->money}}</p>
    <p>{{$discount->count_m}}</p>
    <p>{{$discount->type->title}}</p>
    <p>{{$discount->organisation->title}}</p>

    <x-edit-delete-entry href="/discounts/{{$discount->id}}" />
@endsection
