<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AddEventContentRequest;
use App\Models\EventContent;
use App\Http\Requests\EditEventContentRequest;
use Illuminate\Support\Str;

class EventContentController extends Controller
{
    public function getEvcontent()
    {
        $data['evcontentlist'] = DB::table('vp_eventcontent')->join('vp_event','vp_eventcontent.evcontent_event','=','vp_event.event_id')->orderBy('evcontent_id','desc')->get();
        return view('backend.eventcontent', $data);
    }
    public function getAddEvcontent()
    {
        $data['eventlist'] = Event::all();
        return view('backend.addeventcontent',$data);
    }
    public function postAddEvcontent(AddEventContentRequest $request)
    {
        $filename = $request->img->getClientOriginalName();
        $event = new EventContent();
        $event->evcontent_name = $request->name;
        $event->evcontent_slug = str::slug($request->slug);
        $event->evcontent_author = $request->author;
        $event->evcontent_img = $filename;
        $event->evcontent_accessories = $request->accessories;
        $event->evcontent_price = $request->price;
        $event->evcontent_warranty = $request->warranty;
        $event->evcontent_promotion = $request->promotion;
        $event->evcontent_condition = $request->condition;
        $event->evcontent_status = $request->status;
        $event->evcontent_description = $request->description;
        $event->evcontent_event = $request->event;
        // $event->evcontent_featured = $request->featured;
        $event->save();
        $request->img->storeAs('avatar',$filename);
        return back();
    }
    public function getEditEvcontent( $id)
    {
        $data['evcontent'] = EventContent::find($id);
        $data['listevent'] = Event::all();
        return view('backend.editeventcontent',$data);

    }
    public function postEditEvcontent( EditEventContentRequest $request,$id  )
    {
        $evcontent = new EventContent();
        $arr['evcontent_name'] = $request->name;
        $arr['evcontent_slug'] = str::slug($request->slug);
        $arr['evcontent_author'] = $request->author;
        $arr['evcontent_price'] = $request->price;
        $arr['evcontent_accessories'] = $request->accessories;
        $arr['evcontent_warranty'] = $request->warranty;
        $arr['evcontent_promotion'] = $request->promotion;
        $arr['evcontent_condition'] = $request->condition;
        $arr['evcontent_status'] = $request->status;
        $arr['evcontent_description'] = $request->description;
        $arr['evcontent_event'] = $request->event;
        // $arr['evcontent_featured'] = $request->featured;
        if($request->hasFile('img')){
            $img = $request->img->getClientOriginalName();
            $arr['evcontent_img'] = $img;
            $request->img->storeAs('avatar'.$img);
        }
        $evcontent::where('evcontent_id',$id)->update($arr);
        return redirect('admin/eventcontent');
    }
    public function getDeleteEvcontent($id)
    {
        EventContent::destroy($id);
        return back();
    }
}
