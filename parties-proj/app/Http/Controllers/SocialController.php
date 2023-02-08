<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Social;

class SocialController extends Controller
{
    public function index()
    {
        return view('entities.social.index', [
            'socials' => Social::latest()->orderBy('id', 'desc')->paginate(40)
        ]);
    }

    public function show(Social $social)
    {
        return view('entities.social.show', [
            'social' => $social
        ]);
    }

    public function create()
    {

        return view('entities.social.create');
    }

    public function store(Request $request)
    {
        

        $validated = $request->validate([
            'title' => 'required'
        ]);

        Social::create($validated);

        return redirect('/socials')->with('message', 'Тип собственности успешно добавлен');
    }

    public function edit(Social $social)
    {
        

        return view('entities.Social.edit', ['social' => $social]);
    }

    public function update(Request $request, Social $social)
    {
        

        $validated = $request->validate([
            'title' => 'required'
        ]);

        $social->update($validated);

        return redirect('/socials')->with('message', 'Тип собственности успешно изменён');
    }

    public function destroy(Social $social)
    {


        $social->delete();

        return redirect('/socials')->with('message', 'Тип собственности успешно удалён');
    }
}
