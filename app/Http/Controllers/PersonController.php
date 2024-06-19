<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Models\Event;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $people=Person::all();
        return view('people.index_people', compact('people'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $events=Event::all();
        return view('people.create_person', compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonRequest $request)
    {
        $person= Person::create([
            'nameP'=>$request->nameP,
            'surnameP'=>$request->surnameP,
            'event_id'=>$request->event_id
        ]);

        return redirect()->route('indexPeople')->with('message', 'Persona creata!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Person $person)
    {
        $events=Event::all();
        return view('people.edit_person', compact('person', 'events'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonRequest $request, Person $person)
    {
        $person->update([
            'nameP'=>$request->nameP,
            'surnameP'=>$request->surnameP,
            'event_id'=>$request->event_id
        ]);

        return redirect()->route('indexPeople')->with('message', 'Persona modificata!');
    }

    public function detach(Person $person)
    {
        $person->event_id = null;
        $person->save();
        
        return redirect()->route('homePage')->with('message', 'Persona eliminata dall\'evento!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        //
    }
}