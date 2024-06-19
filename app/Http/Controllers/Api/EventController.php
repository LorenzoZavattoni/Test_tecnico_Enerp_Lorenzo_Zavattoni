<?php

namespace App\Http\Controllers\Api;

use App\Models\Event;
use App\Models\Person;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return response()->json($events);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request)
    {
        $event = Event::create([
            'nameE' => $request->nameE,
            'dateE' => $request->dateE,
        ]);

        return response()->json(['message' => 'Evento creato!', 'event' => $event], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return response()->json($event);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventRequest $request, Event $event)
    {
        $event->update([
            'nameE' => $request->nameE,
            'dateE' => $request->dateE,
        ]);

        return response()->json(['message' => 'Evento modificato!', 'event' => $event]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function updatePartecipant(Request $request, Event $event, Person $person)
    {
        if ($person->event_id && $person->event_id !== $event->id) {
            return response()->json(['message' => 'La persona è già associata a un altro evento!'], 422);
        }
    
        $person->update([
            'event_id' => $event->id,
        ]);

        return response()->json(['message' => 'Partecipante aggiornato!', 'person' => $person]);
    }
}