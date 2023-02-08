<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Social;

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


        return view('entities.member.create', [
            'socials' => Social::all()
        ]);
    }

    public function store(Request $request)
    {


        $validated = $request->validate([
            'surname' => 'required',
            'name' => 'required',
            'patronym' => 'required',
            'birth_date' => 'required',
            'social_id' => 'required|numeric'
        ]);

        $member = Member::create($validated);

        $departments = explode(',', $request['company_id']);
        $member->departments()->attach($departments);

        return redirect('/members')->with('message', 'Владелец успешно добавлен');
    }

    public function edit(Member $member)
    {


        return view('entries.members.edit', [
            'member' => $member,
            'departments' => Department::all()
        ]);
    }

    public function update(Request $request, Member $member)
    {


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
        
        return redirect('/members')->with('message', 'Владелец успешно изменён');
    }

    public function destroy(Member $member)
    {


        $member->delete();

        return redirect('/members')->with('message', 'Владелец успешно удалён');
    }
}
