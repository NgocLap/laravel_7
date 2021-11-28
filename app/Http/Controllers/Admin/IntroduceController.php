<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddIntroRequest;
use App\Http\Requests\EditIntroRequest;
use App\Models\Introduce;
use Illuminate\Support\Str;
use App\Models\Menus;
use Illuminate\Http\Request;

class IntroduceController extends Controller
{
    public function getIntro()
    {
        $data['introlist']= Introduce::all();
        $data['menulist'] = Menus::all();
        return view('backend.introduce',$data);
        
    }
    public function postIntro(AddIntroRequest $request)
    {
            $introduce = new Introduce();
            $introduce->intro_name = $request->name;
            $introduce->intro_slug = str::slug($request->name);
            $introduce->intro_menu = $request->menu;
            $introduce->save();
            return back();

    }
    public function getEditIntro($id){
        $data['intro'] = Introduce::find($id);
        $data['menus'] = Menus::all();
        return view('backend.editintroduce', $data);
    }
    public function postEditIntro(EditIntroRequest $request,$id){
            $introduce = Introduce::find($id);
            $introduce->intro_name = $request->name;
            $introduce->intro_menu = $request->menu;
            $introduce->intro_slug = str::slug($request->name);
            $introduce->save();
            return redirect()->intended('admin/introduce');

    }
    public function getDeleteIntro($id){
            Introduce::destroy($id);
            return back();
    }
}
