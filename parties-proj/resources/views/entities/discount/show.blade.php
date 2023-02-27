@extends('header')

@section('content')
<div class="flex flex-col justify-center m-8 space-y-8">
    <div>
        <span class="font-bold">id:</span>
        <span>{{$discount->id}}</span>
    </div>
    <div>
        <span class="font-bold">название:</span>
        <span> {{$discount->title}}</span>
    </div>
    <div>
        <span class="font-bold">дата проведения:</span>
        <span> {{$discount->event_date}}</span>
    </div>
    <div>
        <span class="font-bold">бюджет:</span>
        <span> {{$discount->money}}</span>
    </div>
    <div>
        <span class="font-bold">кол-во участников:</span>
        <span> {{$discount->count_m}}</span>
    </div>
    <div>
        <span class="font-bold">тип:</span>
        <span> {{$discount->type->title}}</span>
    </div>
    <div>
        <span class="font-bold">организация:</span>
        <span> {{$discount->organisation->title}}</span>
    </div>
    
    <x-edit-delete-entry href="/discounts/{{$discount->id}}" />
</div>
@endsection
