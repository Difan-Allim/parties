@extends('header')

@section('content')
    
    <div class="flex flex-col justify-between space-y-4 pr-4">

        <div class="flex justify-center">
            <x-create-entry href='/organisations/create' />
        </div>

        <div class="flex justify-center">
            <table class="w-min">
                <thead>
                    <tr class="border-b bg-slate-100">
                        <th class="px-8 py-4 text-left whitespace-nowrap">название орг</th>
                        <th class="px-8 py-4 text-left whitespace-nowrap">дата основания</th>
                        <th class="px-8 py-4 text-left whitespace-nowrap">типы орг-й</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($organisations as $organisation)
                    <tr class="border-b">
                        <th class="px-8 py-4 text-left whitespace-nowrap">
                            <a href="/organisations/{{ $organisation->id }}" class="underline hover:text-indigo-500 transition transition-duration-200">
                                {{$organisation->title}}
                            </a>
                        </th>
                        <th class="px-8 py-4 text-left">
                            {{$organisation->holding_date}}
                        </th>
                        <th class="px-8 py-4 text-left">
                            {{$organisation->legal->title}}
                        </th>
                    </tr>
                        
                        
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="py-4 px-24">
            {{ $organisations->links() }}
        </div>
    </div>

@endsection