<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Support\Str;
use App\Http\Requests\AddServiceRequest;
use App\Http\Requests\EditServiceRequest;
use App\Models\Menus;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function getService()
    {
        $data['serlist']= Service::all();
        $data['menulist']= Menus::all();
        return view('backend.service',$data);
    }
    public function postService(AddServiceRequest $request)
    {
        $service = new Service;
        $service->ser_name = $request->name;
        $service->ser_menu = $request->menu;
        $service->ser_slug = str::slug($request->name);
        $service->save();
        return back();

    }
    public function getEditService($id){
        $data['ser'] = Service::find($id);
        $data['menus'] = Menus::all();
        return view('backend.editservice',$data);
    }
    public function postEditService(EditServiceRequest $request,$id){
        $service = Service::find($id);
        $service->ser_name = $request->name;
        $service->ser_menu = $request->menu;
        $service->ser_slug = str::slug($request->name);
        $service->save();
        return redirect()->intended('admin/service');
        
    }
    public function getDeleteService($id){
        Service::destroy($id);
        return back();
    }
}
