<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\PersonRequest;
use App\Models\Event;
use App\Models\Person;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $people = Person::all();
        return response()->json($people);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonRequest $request)
    {
        $person = Person::create([
            'nameP' => $request->nameP,
            'surnameP' => $request->surnameP,
            'event_id' => $request->event_id,
        ]);

        return response()->json(['message' => 'Persona creata!', 'person' => $person], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $person = Person::findOrFail($id);
        return response()->json($person);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonRequest $request, Person $person)
    {
        $person->update([
            'nameP' => $request->nameP,
            'surnameP' => $request->surnameP,
            'event_id' => $request->event_id,
        ]);

        return response()->json(['message' => 'Persona modificata!', 'person' => $person]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $person = Person::findOrFail($id);
        $person->delete();

        return response()->json(['message' => 'Persona eliminata con successo!']);
    }

    public function detach(Person $person)
    {
        if (!$person->event_id) {
            return response()->json(['message' => 'La persona non è associata a nessun evento!']);
        }

        $person->event_id = null;
        $person->save();
        
        return response()->json(['message' => 'Persona eliminata dall\'evento!']);
    }

}
