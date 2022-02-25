<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail; 
use App\Mail\EventInvitation;
use App\Models\Eventes;
use App\Models\Speakers;
use Illuminate\Http\Request;


class EventsController extends Controller
{
    public function getAllEvents(Request $request)
    {
        $events = Eventes::all();
        return view('events',['events' => $events]);
    }
    public function orderEvents(Request $request)
    {
        $events = Eventes::orderBy('date', $request->order)->get();
        return response()->json(['events' => $events]);
    }
    public function searchEvents(Request $request)
    {
        $events = Eventes::where('name', 'like', '%'.$request->search.'%')->get();
        return  response()->json(['events' => $events]);
    }
    public function getAllEventsAdmin(Request $request)
    {
        $events = Eventes::all();
        return view('admin-events',['events' => $events]);
    }
    public function insertEvents(Request $request)
    {
        if($request->hasfile('imagen'))
         {
                $image = rand().time().'.'.$request->file('imagen')->extension();
                $request->file('imagen')->move(public_path().'/images/events/', $image);  
         }

         $insertEvent = Eventes::insertGetId(
            [
                'name' => $request->name, 
                'description' => $request->description,
                'registration' => $request->registration,
                'video' => $request->video,
                'category' => $request->category,
                'language' => $request->language,
                'image' => $image,
                'spaces' => $request->spaces,
                'date' => $request->date
            ]
        );

         if($request->hasfile('speaker_image'))
         {
            $contador_array = 0;
            $speakers_count = 0;
            $host_count = 0;
            foreach($request->file('speaker_image') as $file)
            {

                if($request->speaker_type[$contador_array] == "host"){
                    $host_count++;
                }elseif($request->speaker_type[$contador_array] == "speaker"){
                    $speakers_count++;
                }else{

                }
                $name = rand().time().'.'.$file->extension();
                $file->move(public_path().'/images/speakers/', $name);  
                Speakers::insertGetId([
                    'name' => $request->speaker_name[$contador_array],
                    'image' => $name,
                    'type' => $request->speaker_type[$contador_array],
                    'event_id' => $insertEvent
                ]);
                $contador_array++;  
            }
         }

        $event = Eventes::find($insertEvent);

        $event->speakers = $speakers_count;
        $event->hosts = $host_count;

        $event->save();

        $events = Eventes::all();
        return view('admin-events',['events' => $events]);
    }
    public function deleteEvent(Request $request)
    {
        if ($request->id != null) {
           $events = Eventes::find($request->id);
           $events->delete();
        }

        $events = Eventes::all();
        return view('admin-events',['events' => $events]);
    }
}
