<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
   public function index(){
      $events = Event::all();
      return view('layouts.content',['events'=>$events]);
   }

   public function events(){
      $events = Event::all();
      return view('events.events',['events'=>$events]);
   }

   public function product(){
      
      return view('events.product');
   }

   public function contact(){
      
      return view('events.contact');
   }
   
}
