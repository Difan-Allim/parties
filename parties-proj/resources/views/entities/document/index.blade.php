@extends('header')

@section('content')
    
    <div class="flex flex-col justify-between space-y-4 pr-4">

        <div class="flex justify-center">
            <x-create-entry href='/documents/create' />
        </div>

        <div class="flex justify-center">
            <table class="w-min">
                <thead>
                    <tr class="border-b bg-slate-100">
                        <th class="px-8 py-4 whitespace-nowrap">название док</th>
                        <th class="px-8 py-4 whitespace-nowrap">дата публикации</th>
                        <th class="px-8 py-4 whitespace-nowrap">тип документа</th>
                        <th class="px-8 py-4 whitespace-nowrap">организация</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($documents as $document)
                    <tr class="border-b">
                        <th class="px-8 py-4 text-left whitespace-nowrap">
                            <a href="/documents/{{ $document->id }}" class="underline hover:text-indigo-500 transition transition-duration-200">
                                {{$document->title}}
                            </a>
                        </th>
                        <th class="px-8 py-4 text-left">
                            {{$document->since_date}}
                        </th>
                        <th class="px-8 py-4 text-left">
                            {{$document->purpose->title}}
                        </th>
                        <th class="px-8 py-4 text-left">
                            {{$document->organisation->title}}
                        </th>
                    </tr>
                        
                        
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="py-4 px-24">
            {{ $documents->links() }}
        </div>
    </div>

@endsection