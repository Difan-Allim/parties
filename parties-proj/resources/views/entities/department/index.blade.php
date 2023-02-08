@extends('header')

@section('content')
    @foreach ($departments as $department)
        <a href="/departments/{{ $department->id }}">
            <p>{{ $department->number }}</p>
        </a>
    @endforeach

    <div class="py-4">
        {{ $departments->links() }}
    </div>
@endsection