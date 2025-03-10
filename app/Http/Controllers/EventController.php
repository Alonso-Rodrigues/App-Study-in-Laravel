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

      $search = request('search');
      if($search){

          $events = Event::where([
            ['title', 'like', '%'.$search.'%']
          ])->get();

      }else{
         $events = Event::all();
      }
      
      return view('layouts.events', ['events' => $events, 'search' => $search]);
   }

   public function store(Request $request){
      $event = new Event;
      $event->title = $request->title;
      $event->date = $request->date;
      $event->city = $request->city;
      $event->private = $request->private;
      $event->description = $request->description;
      $event->items = $request->items ;
      
      //Image Upload
      if($request->hasFile('image') && $request->file('image')->isValid()){

         $requestImage = $request->image;
         $extension = $requestImage->extension();
         $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $extension;
         $requestImage->move(public_path('img/events'), $imageName);
         $event->image = $imageName;
      }

      $user = auth()->user();
      $event->user_id = $user->id;

      $event->save();
      return redirect('/')->with('msg','Event created successfully!');
   }

   public function create(){

      return view('events.create');
   }

   public function contact(){

      return view('layouts.contact');
   }  

   public function show($id){

      $event = Event::findOrFail($id);

      return view('events.show', ['event' => $event]);
   }  
}
