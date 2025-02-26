<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
  public function home(){
   
   return view('layouts.main');
   }

   public function events(){
      
      $events = Event::all();
      return view('layouts.events', ['events' => $events]);
   }

   public function store(Request $request){
      $event = new Event;
      $event->title = $request->title;
      $event->city = $request->city;
      $event->private = $request->private;
      $event->description = $request->description;

      $event->save();
      return redirect('/')->with('msg','Event created successfully!');
   }

   public function create(){

      return view('events.create');
   }

   public function contact(){

      return view('layouts.contact');
   }  
}
