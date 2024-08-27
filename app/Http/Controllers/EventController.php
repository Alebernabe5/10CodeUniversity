<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventsRequest;
use App\Models\Event;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;


class EventController extends Controller
{
    public function index(): View
    {
        $events = Event::paginate(9); //Paginación
        return view('events-views', compact('events'));
    }

    public function setting(): View
    {
        $events = Event::paginate(10);
        return view('setting.events-setting', compact('events'));
    }

    public function create(): View
    {
       return view('setting.create');
    }

    public function store(EventsRequest $request): RedirectResponse
    {   
        // dd($request->all());
        Event::create($request->safe()->all());
        return redirect()->route('events.setting');
    }
    
    public function edit(Event $event): View
    {   
        $date=\Carbon\Carbon::parse($event->date)->format('mm/dd/YYYY');
        return view('setting.edit', compact('event', 'date'));
    }
    
    public function update(EventsRequest $request, Event $event): RedirectResponse
    {   
        
       $event->update($request->safe()->all()); 
       return redirect()->route('events.setting');
    }
    
    public function show($id): View
    {
        $event = Event::findOrFail($id);  //Su funcion es buscar el evento por id
        return view('event-detail', compact('event'));
    }

    public function destroy(Request $request, Event $event): RedirectResponse
    {
        $event->delete();
        return redirect()->route('events.setting');
    }

}
