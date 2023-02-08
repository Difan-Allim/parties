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
        $this->authorize('operate', Type::class);
        return view('entities.type.create');
    }

    public function store(Request $request)
    {
        $this->authorize('operate', Type::class);

        $validated = $request->validate([
            'title' => 'required'
        ]);

        Type::create($validated);

        return redirect('/types')->with('message', 'Тип акции успешно добавлен');
    }

    public function edit(Type $type)
    {
        $this->authorize('operate', Type::class);

        return view('entities.type.edit', ['type' => $type]);
    }

    public function update(Request $request, Type $type)
    {
        $this->authorize('operate', Type::class);

        $validated = $request->validate([
            'title' => 'required'
        ]);

        $type->update($validated);

        return redirect('/types')->with('message', 'Тип акции успешно изменён');
    }

    public function destroy(Type $type)
    {
        $this->authorize('operate', Type::class);

        $type->delete();

        return redirect('/types')->with('message', 'Тип акции успешно удалён');
    }
}
