<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Department;
use App\Models\Member;
use App\Models\Organisation;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        return view('entities.department.index', [
            'departments' => Department::latest()->orderBy('id', 'desc')->paginate(40)
        ]);
    }

    public function show(Department $department)
    {
        return view('entities.department.show', [
            'department' => $department
        ]);
    }

    public function create()
    {
        $this->authorize('operate', Department::class);

        return view('entities.department.create', [
            'organisations' => Organisation::all(),
            'cities' => City::all(),
            'members' => Member::all()
        ]);
    }

    public function store(Request $request)
    {
        $this->authorize('operate', Department::class);


        $validated = $request->validate([
            'number' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'city_id' => 'required|numeric',
            'organisation_id' => 'required|numeric'
        ]);

        $department = Department::create($validated);

        $members = explode(',', $request['member_id']);
        $department->members()->attach($members);

        return redirect('/departments')->with('message', 'Штаб успешно добавлен');
    }

    public function edit(Department $department)
    {
        $this->authorize('operate', Department::class);

        return view('entities.department.edit', [
            'department' => $department,
            'organisations' => Organisation::all(),
            'cities' => City::all(),
            'members' => Member::all()
        ]);
    }

    public function update(Request $request, Department $department)
    {
        $this->authorize('operate', Department::class);

        $validated = $request->validate([
            'number' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'city_id' => 'required|numeric',
            'organisation_id' => 'required|numeric'
        ]);

        $department->update($validated);

        $members = explode(',', $request['member_id']);
        $department->members()->detach();
        $department->members()->attach($members);

        return redirect('/departments')->with('message', 'Штаб успешно изменён');
    }

    public function destroy(Department $department)
    {
        $this->authorize('operate', Department::class);

        $department->delete();

        return redirect('/departments')->with('message', 'Штаб успешно удален');
    }
}
