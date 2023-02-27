@extends('header')

@section('content')
    
    <div class="flex flex-col justify-between space-y-4 pr-4">

        <div class="flex justify-center">
            <x-create-entry href='/departments/create' />
        </div>

        <div class="flex justify-center">
            <table class="w-min">
                <thead>
                    <tr class="border-b bg-slate-100">
                        <th class="px-8 py-4 whitespace-nowrap">номер</th>
                        <th class="px-8 py-4 whitespace-nowrap">телефон</th>
                        <th class="px-8 py-4 whitespace-nowrap">адрес</th>
                        <th class="px-8 py-4 whitespace-nowrap">город</th>
                        <th class="px-8 py-4 whitespace-nowrap">организация</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($departments as $department)
                    <tr class="border-b">
                        <th class="px-8 py-4 text-left whitespace-nowrap">
                            <a href="/departments/{{ $department->id }}" class="underline hover:text-indigo-500 transition transition-duration-200">
                                {{$department->number}}
                            </a>
                        </th>
                        <th class="px-8 py-4 text-left whitespace-nowrap">
                            {{$department->phone_number}}
                        </th>
                        <th class="px-8 py-4 text-left whitespace-nowrap">
                            {{$department->address}}
                        </th>
                        <th class="px-8 py-4 text-left whitespace-nowrap">
                            {{$department->city->title}}
                        </th>
                        <th class="px-8 py-4 text-left whitespace-nowrap">
                            {{$department->organisation->title}}
                        </th>
                    </tr>
                        
                        
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="py-4 px-24">
            {{ $departments->links() }}
        </div>
    </div>

@endsection