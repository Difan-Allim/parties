<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Member;
use App\Models\Social;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        return view('entities.member.index', [
            'members' => Member::latest()->orderBy('id', 'desc')->paginate(40)
        ]);
    }

    public function show(Member $member)
    {
        return view('entities.member.show', [
            'member' => $member
        ]);
    }

    public function create()
    {
        $this->authorize('operate', Member::class);

        return view('entities.member.create', [
            'departments' => Department::all(),
            'socials' => Social::all()
        ]);
    }

    public function store(Request $request)
    {
        $this->authorize('operate', Member::class);
        
        $validated = $request->validate([
            'surname' => 'required',
            'name' => 'required',
            'patronym' => 'required',
            'birth_date' => 'required',
            'social_id' => 'required|numeric'
        ]);

        $member = Member::create($validated);

        $departments = explode(',', $request['department_id']);
        $member->departments()->attach($departments);

        return redirect('/members')->with('message', 'Представитель успешно добавлен');
    }

    public function edit(Member $member)
    {
        $this->authorize('operate', Member::class);

        return view('entities.member.edit', [
            'member' => $member,
            'departments' => Department::all(),
            'socials' => Social::all()
        ]);
    }

    public function update(Request $request, Member $member)
    {
        $this->authorize('operate', Member::class);
        
        $validated = $request->validate([
            'surname' => 'required',
            'name' => 'required',
            'patronym' => 'required',
            'birth_date' => 'required',
            'social_id' => 'required|numeric'
        ]);
        
        $member->update($validated);

        $departments = explode(',', $request['department_id']);
        $member->departments()->detach();
        $member->departments()->attach($departments);

        return redirect('/members')->with('message', 'Представитель успешно изменён');
    }

    public function destroy(Member $member)
    {
        $this->authorize('operate', Member::class);

        $member->delete();

        return redirect('/members')->with('message', 'Представитель успешно удалён');
    }
}
