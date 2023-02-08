
@extends('header')

@section('content')
    @foreach ($cities as $city)
    <a href="/cities/{{ $city->id }}">
        <p>{{ $city->title }}</p>
    </a>
    @endforeach

    <div class="py-4">
        {{ $cities->links() }}
    </div>
@endsection