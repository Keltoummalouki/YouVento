<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
        public function index()
        {
            $events = Event::all();
            return view('events.index', compact('events'));
        }
    
        public function create()
        {
            return view('events.create');
        }
    
        public function store(Request $request)
        {
            $request->validate([
                'title' => 'required',
                'category' => 'required',
            ]);
    
            Event::create($request->all());
            return redirect()->route('events.index')->with('success', 'Event ajouté');
        }
    
        public function show(Event $event)
        {
            return view('events.show', compact('events'));
        }
        
        public function edit(Event $event)
        {
            return view('events.edit', compact('events'));
        }
        
        public function update(Request $request, Event $events)
        {
            $request->validate([
                'title' => 'required',
                'category' => 'required',
            ]);
        
            $event->update($request->all());
            return redirect()->route('events.index')->with('success', 'Event mis à jour');
        }
        
        public function destroy(Event $event)
        {
            $event->delete();
            return redirect()->route('events.index')->with('success', 'Event supprimé');
        }
    }        