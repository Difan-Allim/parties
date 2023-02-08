
@extends('header')

@section('content')
    @foreach ($documents as $document)
        <a href="/documents/{{ $document->id }}">
            <p>{{ $document->title }}</p>
        </a>
    @endforeach

    <div class="py-4">
        {{ $documents->links() }}
    </div>
@endsection