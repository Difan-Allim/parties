@extends('header')

@section('content')
    
    <div class="flex flex-col justify-between space-y-4 pr-4">

        <div class="flex justify-center">
            <x-create-entry href='/discounts/create' />
        </div>

        <div class="flex justify-center">
            <table class="w-min">
                <thead>
                    <tr class="border-b bg-slate-100">
                        <th class="px-8 py-4 whitespace-nowrap">название акции</th>
                        <th class="px-8 py-4 whitespace-nowrap">дата проведения</th>
                        <th class="px-8 py-4 whitespace-nowrap">Стоимость</th>
                        <th class="px-8 py-4 whitespace-nowrap">Кол-во людей</th>
                        <th class="px-8 py-4 whitespace-nowrap">типы aкций</th> 
                        <th class="px-8 py-4 whitespace-nowrap">Организации</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($discounts as $discount)
                    <tr class="border-b">
                        <th class="px-8 py-4 text-left whitespace-nowrap">
                            <a href="/discounts/{{ $discount->id }}" class="underline hover:text-indigo-500 transition transition-duration-200">
                                {{$discount->title}}
                            </a>
                        </th>
                        <th class="px-8 py-4 text-left">
                            {{$discount->event_date}}
                        </th>
                        <th class="px-8 py-4 text-left">
                            {{$discount->money}}
                        </th>
                        <th class="px-8 py-4 text-left">
                            {{$discount->count_m}}
                        </th>
                        <th class="px-8 py-4 text-left">
                            {{$discount->type->title}}
                        </th>
                        <th class="px-8 py-4 text-left">
                            {{$discount->organisation->title}}
                        </th>
                    </tr>
                        
                        
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="py-4 px-24">
            {{ $discounts->links() }}
        </div>
    </div>

@endsection