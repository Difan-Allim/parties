@extends('header')

@section('content')
    @foreach ($types as $type)
        <a href="/types/{{ $type->id }}">
            <p>{{ $type->title }}</p>
        </a>
    @endforeach

    <div class="py-4">
        {{ $types->links() }}
    </div>
@endsection