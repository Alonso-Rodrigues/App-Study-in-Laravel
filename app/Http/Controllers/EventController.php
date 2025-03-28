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

   public function store(Request $request) {

    $validatedData = $request->validate([
         'title' => 'required|string|max:255',
         'date' => 'required|date|after_or_equal:today',
         'city' => 'required|string|max:100',
         'private' => 'required|boolean',
         'description' => 'required|string|',
         'items' => 'sometimes|array',
         'items.*' => 'nullable|string|distinct', 
         'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048'
      ]);
      try {
         $validatedData['user_id'] = auth()->id();

         //Upload da imagem
         if($request->hasFile('image') && $request->file('image')->isValid())
         {
            $requestImage = $request->file('image');
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $extension;
            $requestImage->move(public_path('img/events'), $imageName);
            $validatedData['image'] = $imageName;

            Event::create($validatedData);

            return redirect('dashboard')->with('msg','Event created successfully!');
         }

      } catch (\Exception $e) {
         return back()->with('msg', 'Erro ao criar evento: ' . $e->getMessage());
      }
   }

   public function create(){

      return view('events.create');
   }

   public function contact(){

      return view('layouts.contact');
   }  

   public function show($id){

      $event = Event::findOrFail($id);
      $user = auth()->user();
      $hasUserJoined = false;

      if($user){
         $userEvents = $user->eventsAsParticipant->toArray();
         foreach($userEvents as $userEvent){
            $hasUserJoined = true;
         }
      }

      $eventOwner = User::where('id', $event->user_id)->first()->toArray();

      return view('events.show', ['event' => $event, 'eventOwner' => $eventOwner, 'hasUserJoined' => $hasUserJoined]);
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
      $imagePath = public_path('img/events/');
      $imageName = pathinfo($event->image, PATHINFO_FILENAME);
      
      foreach (['avif', 'jpg', 'png', 'webp'] as $extension) {
         $filePath = $imagePath . $imageName . '.' .$extension;

         if (file_exists($filePath)) {
            unlink($filePath);
         }
      }
      $event->delete();
         
      return redirect('dashboard')->with('msg', 'Event deleted successfully');
   }

   public function edit($id){

      $event = Event::findOrFail($id);
      $user = auth()->user();

      if($user->id != $event->user_id){

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

      $event = Event::findOrFail($id);
      $user = auth()->user();
      
      if ($event->users()->where('user_id', $user->id)->exists()) {
         return redirect()->back()->with('msg', 'You are already subscribed to this event!');
      }

      $user->eventsAsParticipant()->attach($id);
      
      return redirect('dashboard')->with('msg', 'Your presence has been confirmed at the event:' . $event->title);
   }
   
   public function leaveEvent($id){

      $event = Event::findOrFail($id);
      $user = auth()->user();
      $user->eventsAsParticipant()->detach($id);
      
      return redirect('dashboard')->with('msg', 'Your presence has been successfully removed from the event:' . $event->title);
   }

}