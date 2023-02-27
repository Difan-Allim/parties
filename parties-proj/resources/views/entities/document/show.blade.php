@extends('header')

@section('content')

<div class="flex flex-col justify-center m-8 space-y-8">
    <div>
        <span class="font-bold">id:</span>
        <span>{{$document->id}}</span>
    </div>
    <div>
        <span class="font-bold">название:</span>
        <span> {{$document->title}}</span>
    </div>
    <div>
        <span class="font-bold">дата публикации:</span>
        <span> {{$document->since_date}}</span>
    </div>
    <div>
        <span class="font-bold">направленность:</span>
        <span> {{$document->purpose->title}}</span>
    </div>
    <div>
        <span class="font-bold">организация:</span>
        <span> {{$document->organisation->title}}</span>
    </div>
    
    <x-edit-delete-entry href="/documents/{{$document->id}}" />
</div>
@endsection