<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
  public function home(){
   
   return view('layouts.main');
   }

   public function create(){

      return view('events.create');
   }

   public function contact(){

      return view('layouts.contact');
   }

   public function events(){
      
      $events = Event::all();
      return view('layouts.events', ['events' => $events]);
   }
   
}
