<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menus;
use Illuminate\Support\Str;
use App\Http\Requests\AddMenuRequest;
use App\Http\Requests\EditMenuRequest;
use Illuminate\Http\Request;

class MenuConTroller extends Controller
{
    public function getMenu()
    {
        $data['menulist']= Menus::all();
        return view('backend.menu',$data);
    }
    public function postMenu(AddMenuRequest $request)
    {
        $menu = new Menus;
        $menu->menu_name = $request->name;
        $menu->menu_slug = str::slug($request->name);
        $menu->save();
        return back();        
    }
    public function getEditMenu($id){
        $data['menu'] = Menus::find($id);
        return view('backend.editmenu', $data);
    }
    public function postEditMenu(EditMenuRequest $request,$id){
 
            $menu = Menus::find($id);
            $menu->menu_name = $request->name;
            $menu->menu_slug = str::slug($request->name);
            $menu->save();
            return redirect()->intended('admin/menu');  
    }
    public function getDeleteMenu($id){
        Menus::destroy($id);
            return back();
    }
}
