@extends('header')

@section('content')
    @foreach ($legals as $legal)
        <a href="/legals/{{ $legal->id }}">
            <p>{{ $legal->title }}</p>
        </a>
    @endforeach

    <div class="py-4">
        {{ $legals->links() }}
    </div>
@endsection