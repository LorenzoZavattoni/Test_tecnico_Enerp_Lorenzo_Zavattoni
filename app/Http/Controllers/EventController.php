<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Person;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create_event');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request)
    {
        $event= Event::create([
            'nameE'=>$request->nameE,
            'dateE'=>$request->dateE
        ]);

        return redirect()->route('createEvent')->with('message', 'Evento creato!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('events.show_event', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('events.edit_event', compact('event'));
    }

    public function editPartecipant(Event $event)
    {
        $people = Person::whereNull('event_id')->get();
       
        return view('events.edit_partecipant', compact('event', 'people'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventRequest $request, Event $event)
    {
        $event->update([
            'nameE'=>$request->nameE,
            'dateE'=>$request->dateE
        ]);

        return redirect()->route('homePage')->with('message', 'Evento modificato!');
    }

    public function updatePartecipant(Person $person, Event $event)
    {
        $person->event_id = $event->id;

        $person->save();

        return redirect()->route('homePage')->with('message', 'Partecipante aggiunto all\'evento!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}