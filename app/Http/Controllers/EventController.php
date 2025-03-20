<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;

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
      return redirect('dashboard')->with('msg','Event created successfully!');
   }

   public function create(){

      return view('events.create');
   }

   public function contact(){

      return view('layouts.contact');
   }  

   public function show($id){

      $event = Event::findOrFail($id);

      $eventOwner = User::where('id', $event->user_id)->first()->toArray();

      return view('events.show', ['event' => $event, 'eventOwner' => $eventOwner]);
   }

   public function dashboard() {
      $user = auth()->user();
      $events = $user->events;
      $eventsAsParticipant = $user->eventsAsParticipant;

      return view('dashboard', [
         'user' => $user, 
         'events' => $events, 
         'eventsAsParticipant' => $eventsAsParticipant
      ]);
   }

   public function destroy($id)
   {
      $event = Event::findOrFail($id);
      $imagePath = public_path('img/events/' . $event->image);
      $event->delete();

      if (file_exists($imagePath)) {
         unlink($imagePath);
      }
      
      return redirect('dashboard')->with('msg', 'Event deleted successfully');
   }

   public function edit($id){

      $event = Event::findOrFail($id);
      $user = auth()->user();

      if($user->id != $event->$user->id){

      return redirect('dashboard');

      }

      return view('events.edit', ['event' => $event]);
   }

   public function update(Request $request, $id){

      $data = $request->all();
     

      if($request->hasFile('image') && $request->file('image')->isValid()){

         $requestImage = $request->image;
         $extension = $requestImage->extension();
         $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $extension;
         $requestImage->move(public_path('img/events'), $imageName);
         $data['image'] = $imageName;
      }

      $event = Event::findOrFail($id);
      $event->update($data);
    
      
      return redirect('dashboard')->with('msg', 'Event edited successfully');
   }

   public function joinEvent($id){

      $user = auth()->user();
      $user->eventsAsParticipant()->attach($id);
      $event = Event::findOrFail($id);

      return redirect('dashboard')->with('msg', 'Your presence has been confirmed at the event:' . $event->title);
   }
}
