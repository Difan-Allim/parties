<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Member;
use App\Models\Organisation;

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
        return view('entities.department.create', [
            'organisations' => Organisation::all(),
            'cities' => City::all(),
            'members' => Member::all()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'number' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'city_id' => 'required|numeric',
            'organisation_id' => 'required|numeric'
        ]);

        dd($validated);

        $department = Department::create($validated);
        
        $members = explode(',', $request['member_id']);
        $department->members()->attach($members);

        return redirect('/departments')->with('message', 'Предприятие успешно добавлено');
    }

    public function edit(Department $department)
    {
        
        return view('entities.department.edit', [
            'department' => $department,
            'cities' => City::all(),
            'organisations' => Organisation::all()
        ]);
    }

    public function update(Request $request, Department $department)
    {
        

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

        return redirect('/departments')->with('message', 'Предприятие успешно изменено');
    }

    public function destroy(Department $department)
    {



        $department->delete();

        return redirect('/departments')->with('message', 'Предприятие успешно удалено');
    }
}
