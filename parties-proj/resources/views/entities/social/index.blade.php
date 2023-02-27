@extends('header')

@section('content')
    
    <div class="flex flex-col justify-between space-y-4 pr-4">

        <div class="flex justify-center">
            <x-create-entry href='/socials/create' />
        </div>

        <div class="flex justify-center">
            <table class="w-min">
                <thead>
                    <tr class="border-b bg-slate-100">
                        <th class="px-8 py-4 text-left whitespace-nowrap">название соц</th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach ($socials as $social)
                    <tr class="border-b">
                        <th class="px-8 py-4 text-left whitespace-nowrap">
                            <a href="/socials/{{ $social->id }}" class="underline hover:text-indigo-500 transition transition-duration-200">
                                {{$social->title}}
                            </a>
                        </th>
                    </tr>
                        
                        
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="py-4 px-24">
            {{ $socials->links() }}
        </div>
    </div>

@endsection