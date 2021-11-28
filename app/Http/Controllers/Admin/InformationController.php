<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Information;
use App\Http\Requests\AddInforRequest;
use App\Http\Requests\EditInfoRequest;
use App\Models\Menus;
use Illuminate\Support\Str;

class InformationController extends Controller
{
    public function getInfo(){
        $data['inforlist'] = Information::all();
        $data['menulist'] = Menus::all();
        return view('backend.information', $data);
    }
    public function postInfo(AddInforRequest $request){
        $information = new Information();
        $information->cate_name = $request->name;
        $information->infor_menu = $request->menu;
        $information->cate_slug = str::slug($request->name);
        $information->save();
        return back();

    }
    public function getEditInfo($id){
        $data['infor'] = Information::find($id);
        $data['menus'] = Menus::all();
        return view('backend.editinformation',$data);
    }
    public function postEditInfo(EditInfoRequest $request, $id){
        $information = Information::find($id);
        $information->cate_name = $request->name;
        $information->infor_menu = $request->menu;
        $information->cate_slug = str::slug($request->name);
        $information->save();
        return redirect()->intended('admin/information');
        
    }
    public function getDeleteInfo($id){
        Information::destroy($id);
        return back();
    }
}
