<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Asset;

class OwnerController extends Controller {
    
    public function __construct() {
        $this->middleware('auth', ['except' => ['index']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index() {
        // Retrieve all Person models with their related Asset models
        $person = Person::whereHas('assets')->with('assets')->get();
        return view('owner.index', compact('person'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        $person = Person::all();
        $asset = Asset::whereNull('person_id')->get();
        return view('owner.create', compact('person', 'asset'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        if($request->input('person_id') != 'none' and $request->input('asset_id') != 'none') {
            Asset::whereId($request->input('asset_id'))->update(['person_id' => $request->input('person_id')]);
        
            return redirect('/owner')->with('success', 'Ownership created successfully');
        }
        return view('owner.error');
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $person_id) {
        $person = Person::findOrFail($person_id);
        $people = Person::all();
        $assets = Asset::where('person_id', $person_id)->get();
        return view('owner.edit', array('person' => $person, 'people' => $people, 'assets' => $assets));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $person_id) {
        Asset::whereId($request->input('id'))->update(['person_id' => $request->input('person_id')]);
        
        return redirect('/owner')->with('success', 'Owner changed successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $person_id) {
        Asset::where('person_id', $person_id)->update(['person_id' => null]);
        
        return redirect('/owner')->with('success', 'Person removed from asset successfully');
    }

}
