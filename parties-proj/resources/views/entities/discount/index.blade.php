@extends('header')

@section('content')
    @foreach ($discounts as $discount)
        <a href="/discounts/{{ $discount->id }}">
            <p>{{ $discount->title }}</p>
        </a>
    @endforeach

    <div class="py-4">
        {{ $discounts->links() }}
    </div>
@endsection