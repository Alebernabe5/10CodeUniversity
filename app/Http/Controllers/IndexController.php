<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class IndexController extends Controller
{
    public function index()
    {
        $events = Event::take(3)->get();
        return view('index', compact('events'));
      
    }
    public function show(Event $event)
    {
               
        return view('events-views', compact('cardEvent'));
      
    }
    // Esto ahora mismo no hace nada porque no tiene url en web
    // public function create()
    // {
    //     $event =new Event;
    //     $event->title = "Building your API Stack";
    //     $event->description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tristique...";
    //     $event->place = "Aula 2";
    //     $event->date = '2024-06-18'; // Formato: año-mes-día
    //     // $event->time = 1; 
    //     $event->capacity = "40";
    //     $event->organizer = "10Code";
    //     $event->image_url = "event3.jpg";

    //     $event->save(); 
      
    //     Return redirect()->route('home');
    // }
}
