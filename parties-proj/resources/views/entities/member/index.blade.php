@extends('header')

@section('content')
    @foreach ($members as $member)
        <a href="/members/{{ $member->id }}">
            <p>{{ $member->name }}</p>
        </a>
    @endforeach

    <div class="py-4">
        {{ $members->links() }}
    </div>
@endsection