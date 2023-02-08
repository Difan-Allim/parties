<?php

namespace App\Http\Controllers;

use App\Models\Legal;
use Illuminate\Http\Request;
use App\Models\Organisation;

class OrganisationController extends Controller
{
    public function index()
    {
        return view('entities.organisation.index', [
            'organisations' => Organisation::latest()->orderBy('id', 'desc')->paginate(40)
        ]);
    }

    public function show(Organisation $organisation)
    {
        return view('entities.organisation.show', [
            'organisation' => $organisation
        ]);
    }

    public function create()
    {

        return view('entities.organisation.create', [
            'legals' => Legal::all()
        ]);
    }

    public function store(Request $request)
    {
        

        $validated = $request->validate([
            'title' => 'required',
            'holding_date' => 'required',
            'legal_id' => 'required|numeric'
        ]);

        Organisation::create($validated);

        return redirect('/organisations')->with('message', 'Тип собственности успешно добавлен');
    }

    public function edit(Organisation $organisation)
    {
        
        return view('entities.organisation.edit', [
            'organisation' => $organisation,
            'legals' => Legal::all()
        ]);
        return view('entries.organisations.edit', ['organisation' => $organisation]);
    }

    public function update(Request $request, Organisation $organisation)
    {
        

        $validated = $request->validate([
            'title' => 'required',
            'holding_date' => 'required',
            'legal_id' => 'required|numeric'
        ]);

        $organisation->update($validated);

        return redirect('/organisations')->with('message', 'Тип собственности успешно изменён');
    }

    public function destroy(Organisation $organisation)
    {


        $organisation->delete();

        return redirect('/organisations')->with('message', 'Тип собственности успешно удалён');
    }
}
