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
        $this->authorize('operate', Purpose::class);
        return view('entities.purpose.create');
    }

    public function store(Request $request)
    {
        $this->authorize('operate', Purpose::class);

        $validated = $request->validate([
            'title' => 'required'
        ]);

        Purpose::create($validated);

        return redirect('/purposes')->with('message', 'Направленность успешно добавлена');
    }

    public function edit(Purpose $purpose)
    {
        $this->authorize('operate', Purpose::class);

        return view('entities.purpose.edit', ['purpose' => $purpose]);
    }

    public function update(Request $request, Purpose $purpose)
    {
        $this->authorize('operate', Purpose::class);

        $validated = $request->validate([
            'title' => 'required'
        ]);

        $purpose->update($validated);

        return redirect('/purposes')->with('message', 'Направленность успешно изменена');
    }

    public function destroy(Purpose $purpose)
    {
        $this->authorize('operate', Purpose::class);

        $purpose->delete();

        return redirect('/purposes')->with('message', 'Направленность успешно удалена');
    }
}
