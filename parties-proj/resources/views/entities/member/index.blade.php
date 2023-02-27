@extends('header')

@section('content')
    
    <div class="flex flex-col justify-between space-y-4 pr-4">

        <div class="flex justify-center">
            <x-create-entry href='/members/create' />
        </div>

        <div class="flex justify-center">
            <table class="w-min">
                <thead>
                    <tr class="border-b bg-slate-100">
                        <th class="px-8 py-4 text-left whitespace-nowrap">фамилия</th>
                        <th class="px-8 py-4 text-left whitespace-nowrap">имя</th>
                        <th class="px-8 py-4 text-left whitespace-nowrap">отчество</th>
                        <th class="px-8 py-4 text-left whitespace-nowrap">дата рождению</th>
                        <th class="px-8 py-4 text-left whitespace-nowrap">социальное положение</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($members as $member)
                    <tr class="border-b">
                        <th class="px-8 py-4 text-left whitespace-nowrap">
                            <a href="/members/{{ $member->id }}" class="underline hover:text-indigo-500 transition transition-duration-200">
                                {{$member->surname}}
                            </a>
                        </th>
                        <th class="px-8 py-4 text-left">
                            {{$member->name}}
                        </th>
                        <th class="px-8 py-4 text-left">
                            {{$member->patronym}}
                        </th>
                        <th class="px-8 py-4 text-left">
                            {{$member->birth_date}}
                        </th>
                        <th class="px-8 py-4 text-left">
                            {{$member->social->title}}
                        </th>
                    </tr>
                        
                        
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="py-4 px-24">
            {{ $members->links() }}
        </div>
    </div>

@endsection