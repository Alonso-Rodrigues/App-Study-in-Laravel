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

   public function create(){
      return view('events.create');
   }

   public function products(){
      
      return view('products');
   }

   public function contact(){
      
      return view('contact');
   }
   
}
