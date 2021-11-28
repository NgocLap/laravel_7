<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Support\Str;
use App\Http\Requests\AddEventRequest;
use App\Http\Requests\EditEventRequest;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function getEvent()
    {
        $data['eventlist']= Event::all();
        return view('backend.event',$data);   
    }
    public function postEvent(AddEventRequest $request)
    {
            $filename = $request->img->getClientOriginalName();
            $event = new Event();
            $event->event_name = $request->name;
            $event->event_img = $filename;
            $event->event_slug = str::slug($request->name);
            $request->img->storeAs('avatar',$filename);
            $event->save();
            return back();

          
    }
    public function getEditEvent($id){
        $data['event'] = Event::find($id);
        return view('backend.editevent', $data);
    }
    public function postEditEvent(EditEventRequest $request,$id){
 
        $event = new Event();
        $arr['event_name'] = $request->name;
        $arr['event_slug'] = str::slug($request->slug);
        if($request->hasFile('img')){
            $img = $request->img->getClientOriginalName();
            $arr['event_img'] = $img;
            $request->img->storeAs('avatar',$img);
        }
        $event::where('event_id',$id)->update($arr);
        return redirect()->intended('admin/event');

        // $event = Event::find($id);
        // $event->event_name = $request->name;
        // $event->event_slug = str::slug($request->name);
        // $event->event_img = $request->img;
        // if($request->hasFile('img')){
        //     $img = $request->img->getClientOriginalName();
        //     $event->event_img = $img;
        //     $request->img->storeAs('avatar'.$img);
        // }
        // $event->save();
        // return redirect()->intended('admin/event');

    }
    public function getDeleteEvent($id){
            Event::destroy($id);
            return back();

    }
}
