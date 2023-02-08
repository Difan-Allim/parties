<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    public function index()
    {
        return view('entities.city.index', [
            'cities' => City::latest()->orderBy('id', 'desc')->paginate(40)
        ]);
    }

    public function show(City $city)
    {
        return view('entities.city.show', [
            'city' => $city
        ]);
    }

    public function create()
    {
        $this->authorize('operate', City::class);

        return view('entities.city.create');
    }
    
    public function store(Request $request)
    {
        $this->authorize('operate', City::class);

        $validated = $request->validate([
            'title' => 'required'
        ]);

        City::create($validated);

        return redirect('/cities')->with('message', 'Город успешно добавлен');
    }

    public function edit(City $city)
    {
        $this->authorize('operate', City::class);

        return view('entities.city.edit', ['city' => $city]);
    }

    public function update(Request $request, City $city)
    {
        $this->authorize('operate', City::class);

        $validated = $request->validate([
            'title' => 'required'
        ]);

        $city->update($validated);

        return redirect('/cities')->with('message', 'Город успешно изменён');
    }

    public function destroy(City $city)
    {
        $this->authorize('operate', City::class);

        $city->delete();

        return redirect('/cities')->with('message', 'Город успешно удалён');
    }
}
