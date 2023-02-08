@extends('header')

@section('content')
    @foreach ($organisations as $organisation)
        <a href="/organisations/{{ $organisation->id }}">
            <p>{{ $organisation->title }}</p>
        </a>
    @endforeach

    <div class="py-4">
        {{ $organisations->links() }}
    </div>
@endsection