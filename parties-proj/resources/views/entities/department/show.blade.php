@extends('header')

@section('content')
<div class="flex flex-col justify-center m-8 space-y-8">
    <div>
        <span class="font-bold">id:</span>
        <span>{{$department->id}}</span>
    </div>
    <div>
        <span class="font-bold">номер:</span>
        <span> {{$department->number}}</span>
    </div>
    <div>
        <span class="font-bold">телефон:</span>
        <span> {{$department->phone_number}}</span>
    </div>
    <div>
        <span class="font-bold">адрес:</span>
        <span> {{$department->address}}</span>
    </div>
    <div>
        <span class="font-bold">город:</span>
        <span> {{$department->city->title}}</span>
    </div>
    <div>
        <span class="font-bold">организация:</span>
        <span> {{$department->organisation->title}}</span>
    </div>
    
    <x-edit-delete-entry href="/departments/{{$department->id}}" />
</div>

@endsection
