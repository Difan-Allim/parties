@extends('header')

@section('content')
    
    <div class="flex flex-col justify-between space-y-4 pr-4">

        <div class="flex justify-center">
            <x-create-entry href='/cities/create' />
        </div>

        <div class="flex justify-center">
            <table class="w-min">
                <thead>
                    <tr class="border-b bg-slate-100">
                        <th class="px-8 py-4 text-left whitespace-nowrap">название города</th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cities as $city)
                    <tr class="border-b">
                        <th class="px-8 py-4 text-left whitespace-nowrap">
                            <a href="/cities/{{ $city->id }}" class="underline hover:text-indigo-500 transition transition-duration-200">
                                {{$city->title}}
                            </a>
                        </th>
                    </tr>
                        
                        
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="py-4 px-24">
            {{ $cities->links() }}
        </div>
    </div>

@endsection