<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{
    public function index()
    {
        return view('entities.type.index', [
            'types' => Type::latest()->orderBy('id', 'desc')->paginate(40)
        ]);
    }

    public function show(Type $type)
    {
        return view('entities.type.show', [
            'type' => $type
        ]);
    }

    public function create()
    {

        return view('entities.type.create');
    }

    public function store(Request $request)
    {
        

        $validated = $request->validate([
            'title' => 'required'
        ]);

        Type::create($validated);

        return redirect('/types')->with('message', 'Тип собственности успешно добавлен');
    }

    public function edit(Type $type)
    {
        

        return view('entities.type.edit', ['type' => $type]);
    }

    public function update(Request $request, Type $type)
    {
        

        $validated = $request->validate([
            'title' => 'required'
        ]);

        $type->update($validated);

        return redirect('/types')->with('message', 'Тип собственности успешно изменён');
    }

    public function destroy(Type $type)
    {


        $type->delete();

        return redirect('/types')->with('message', 'Тип собственности успешно удалён');
    }
}
