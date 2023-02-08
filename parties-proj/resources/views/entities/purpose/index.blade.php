@extends('header')

@section('content')
    @foreach ($purposes as $purpose)
        <a href="/purposes/{{ $purpose->id }}">
            <p>{{ $purpose->title }}</p>
        </a>
    @endforeach

    <div class="py-4">
        {{ $purposes->links() }}
    </div>
@endsection