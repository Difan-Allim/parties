@extends('header')

@section('content')
    @foreach ($socials as $social)
        <a href="/socials/{{ $social->id }}">
            <p>{{ $social->title }}</p>
        </a>
    @endforeach

    <div class="py-4">
        {{ $socials->links() }}
    </div>
@endsection