<?php

namespace App\Http\Controllers;

use App\Models\Contact; // Import your model
use Illuminate\Http\Request; // Import request for handling data

class ContactController extends Controller // Extending Controller class
{
   public function index(Request $request)
    {
        $query = Contact::query();

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('email', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('sort')) {
            $query->orderBy($request->sort, $request->order ?? 'asc');
        }

        $contacts = $query->paginate(10);
        return view('contacts.index', compact('contacts'));
    } 


    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:contacts',
        ]);

        Contact::create($request->all());
        return redirect('/contacts')->with('success', 'Contact created successfully');
    }

    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }

    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:contacts,email,' . $contact->id,
        ]);

        $contact->update($request->all());
        return redirect('/contacts')->with('success', 'Contact updated successfully');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect('/contacts')->with('success', 'Contact deleted successfully');
    }

}