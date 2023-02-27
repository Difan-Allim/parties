<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\Legal;
use Illuminate\Http\Request;
use App\Models\Organisation;

class OrganisationController extends Controller
{
    public function index()
    {
        // dd(Organisation::all());

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
        $this->authorize('operate', Organisation::class);
        return view('entities.organisation.create', [
            'discounts' => Discount::all(),
            'legals' => Legal::all()
        ]);
    }

    public function store(Request $request)
    {
        $this->authorize('operate', Organisation::class);

        $validated = $request->validate([
            'title' => 'required',
            'holding_date' => 'required',
            'legal_id' => 'required|numeric'
        ]);

        $discount = Discount::create($validated);

        $organisations = explode(',', $request['organisation_id']);
        $discount->organisations()->attach($organisations);

        return redirect('/organisations')->with('message', 'Организация успешно добавлен');
    }

    public function edit(Organisation $organisation)
    {
        $this->authorize('operate', Organisation::class);
        return view('entities.organisation.edit', [
            'organisation' => $organisation,
            'discounts' => Discount::all(),
            'legals' => Legal::all()
        ]);
        return view('entries.organisations.edit', ['organisation' => $organisation]);
    }

    public function update(Request $request, Organisation $organisation)
    {
        $this->authorize('operate', Organisation::class);

        $validated = $request->validate([
            'title' => 'required',
            'holding_date' => 'required',
            'legal_id' => 'required|numeric'
        ]);

        $organisation->update($validated);

        $discounts = explode(',', $request['discount_id']);
        $organisation->discounts()->detach();
        $organisation->discounts()->attach($discounts);

        return redirect('/organisations')->with('message', 'Организация успешно изменена');
    }

    public function destroy(Organisation $organisation)
    {
        $this->authorize('operate', Organisation::class);

        $organisation->delete();

        return redirect('/organisations')->with('message', 'Организация успешно удалена');
    }
}
