<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $person = Person::all();
        return view('person.index', compact('person'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('person.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|max:20',
            'last_name' => 'required|max:20',
            'date_of_birth' => 'required|date',
            'email' => 'required|email',
        ]);
        $person = Person::create($validated);
        
        return redirect('/person')->with('success', 'Person created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $person_id)
    {
        $person = Person::findOrFail($person_id);
        return view('person.show', array('person' => $person));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $person_id)
    {
        $person = Person::findOrFail($person_id);
        return view('person.edit', compact('person'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $person_id)
    {
        $validated = $request->validate([
            'first_name' => 'required|max:20',
            'last_name' => 'required|max:20',
            'date_of_birth' => 'required|date',
            'email' => 'required|email',
        ]);
        Person::whereId($person_id)->update($validated);
        
        return redirect('/person')->with('success', 'Person details updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $person_id)
    {
        $person = Person::findOrFail($person_id);
        $person->delete();
        
        return redirect('/person')->with('success', 'Person was deleted successfully');
    }
}
