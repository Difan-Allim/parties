<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discount;
use App\Models\Organisation;
use App\Models\Type;
use App\Models\User;

class DiscountController extends Controller
{
    public function index()
    {
        return view('entities.discount.index', [
            'discounts' => Discount::latest()->orderBy('id', 'desc')->paginate(40)
        ]);
    }

    public function show(Discount $discount)
    {
        return view('entities.discount.show', [
            'discount' => $discount
        ]);
    }

    public function create()
    {
        $this->authorize('operate', Discount::class);
        return view('entities.discount.create', [
            'organisations' => Organisation::all(),
            'types' => Type::all()
        ]);
    }

    public function store(Request $request)
    {
        $this->authorize('operate', Discount::class);

        $validated = $request->validate([
            'title' => 'required',
            'event_date' => 'required',
            'money' => 'required',
            'count_m' => 'required',
            'type_id' => 'required',
            'organisation_id' => 'required|numeric',
            'user_id' => '',
        ]);

        // dd($validated);

        Discount::create($validated);

        return redirect('/discounts')->with('message', 'Акция успешно добавлена');
    }

    public function edit(Discount $discount)
    {
        $this->authorize('operate', Discount::class);

        return view('entities.discount.edit', [
            'discount' => $discount,
            'organisations' => Organisation::all(),
            'types' => Type::all()
        ]);
    }

    public function update(Request $request, Discount $discount)
    {
        $this->authorize('operate', Discount::class);
        
        $validated = $request->validate([
            'title' => 'required',
            'event_date' => 'required',
            'money' => 'required',
            'count_m' => 'required',
            'type_id' => 'required',
            'organisation_id' => 'required|numeric',
        ]);

        $discount->update($validated);

        return redirect('/discounts')->with('message', 'Акция успешно измена');
    }

    public function destroy(Discount $discount)
    {
        $this->authorize('operate', Discount::class);

        $discount->delete();

        return redirect('/discounts')->with('message', 'Акция успешно удалена');
    }

}
