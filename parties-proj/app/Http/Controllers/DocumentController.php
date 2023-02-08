<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\Organisation;
use App\Models\Purpose;

class DocumentController extends Controller
{
    public function index()
    {
        return view('entities.document.index', [
            'documents' => Document::latest()->orderBy('id', 'desc')->paginate(40)
        ]);
    }

    public function show(Document $document)
    {
        return view('entities.document.show', [
            'document' => $document
        ]);
    }

    public function create()
    {

        return view('entities.document.create', [
            'purposes' => Purpose::all(),
            'organisations' => Organisation::all()
        ]);
    }

    public function store(Request $request)
    {
        

        $validated = $request->validate([
            'title' => 'required',
            'since_date' => 'required',
            'purpose_id' => 'required|numeric',
            'organisation_id' => 'required|numeric',
            'user_id' => '',
        ]);

        Document::create($validated);

        return redirect('/documents')->with('message', 'Магазин успешно добавлен');
    }

    public function edit(Document $document)
    {
        

        return view('entities.document.edit', [
            'document' => $document,
            'organisations' => Organisation::all(),
            'purposes' => Purpose::all()
        ]);
    }

    public function update(Request $request, Document $document)
    {
        
        
        $validated = $request->validate([
            'title' => 'required',
            'since_date' => 'required',
            'purpose_id' => 'required|numeric',
            'organisation_id' => 'required|numeric',
            'user_id' => '',
        ]);

        $document->update($validated);

        return redirect('/documents')->with('message', 'Магазин успешно изменён');
    }

    public function destroy(Document $document)
    {
        

        $document->delete();

        return redirect('/documents')->with('message', 'Магазин успешно удалён');
    }
}
