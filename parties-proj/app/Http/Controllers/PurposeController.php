<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purpose;

class PurposeController extends Controller
{
    public function index()
    {
        return view('entities.purpose.index', [
            'purposes' => Purpose::latest()->orderBy('id', 'desc')->paginate(40)
        ]);
    }

    public function show(Purpose $purpose)
    {
        return view('entities.purpose.show', [
            'purpose' => $purpose
        ]);
    }

    public function create()
    {

        return view('entities.purpose.create');
    }

    public function store(Request $request)
    {
        

        $validated = $request->validate([
            'title' => 'required'
        ]);

        Purpose::create($validated);

        return redirect('/purposes')->with('message', 'Тип собственности успешно добавлен');
    }

    public function edit(Purpose $purpose)
    {
        

        return view('entities.purpose.edit', ['purpose' => $purpose]);
    }

    public function update(Request $request, Purpose $purpose)
    {
        

        $validated = $request->validate([
            'title' => 'required'
        ]);

        $purpose->update($validated);

        return redirect('/purposes')->with('message', 'Тип собственности успешно изменён');
    }

    public function destroy(Purpose $purpose)
    {


        $purpose->delete();

        return redirect('/purposes')->with('message', 'Тип собственности успешно удалён');
    }
}
