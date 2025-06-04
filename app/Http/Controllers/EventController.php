<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

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
        // Validation aur saving logic yahan add karna
        Event::create($request->all());

        return redirect()->route('events.index');
    }
    public function destroy($id)
{
    $event = Event::findOrFail($id);
    $event->delete();

    return redirect()->route('events.index')->with('success', 'Event deleted successfully.');
}
// Controller
public function edit($id)
{
    $event = Event::findOrFail($id);
    // No parsing or formatting here
    return view('events.edit', compact('event'));
}


// Handle the update of an event
public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'date' => 'required|date',
    ]);

    $event = Event::findOrFail($id);
    $event->title = $request->title;
    $event->date = $request->date;
    $event->save();

    return redirect()->route('events.index')->with('success', 'Event updated successfully!');
}

}
