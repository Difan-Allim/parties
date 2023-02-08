<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Legal;

class LegalController extends Controller
{
    public function index()
    {
        return view('entities.legal.index', [
            'legals' => Legal::latest()->orderBy('id', 'desc')->paginate(40)
        ]);
    }

    public function show(Legal $legal)
    {
        return view('entities.legal.show', [
            'legal' => $legal
        ]);
    }

    public function create()
    {
        $this->authorize('operate', Legal::class);
        return view('entities.legal.create');
    }
    public function store(Request $request)
    {
        $this->authorize('operate', Legal::class);

        $validated = $request->validate([
            'title' => 'required'
        ]);

        Legal::create($validated);

        return redirect('/legals')->with('message', 'Тип собственности успешно добавлен');
    }

    public function edit(Legal $legal)
    {
        $this->authorize('operate', Legal::class);

        return view('entities.legal.edit', ['legal' => $legal]);
    }

    public function update(Request $request, Legal $legal)
    {
        $this->authorize('operate', Legal::class);

        $validated = $request->validate([
            'title' => 'required'
        ]);

        $legal->update($validated);

        return redirect('/legals')->with('message', 'Тип собственности успешно изменён');
    }

    public function destroy(Legal $legal)
    {
        $this->authorize('operate', Legal::class);

        $legal->delete();

        return redirect('/legals')->with('message', 'Тип собственности успешно удалён');
    }
}
