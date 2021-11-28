<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryDiscount;
use App\Models\Menus;
use Illuminate\Support\Str;
use App\Http\Requests\AddCateDiscountRequest;
use App\Http\Requests\EditCateDiscountRequest;
use Illuminate\Http\Request;

class CategoryDiscountController extends Controller
{
    public function getCateDiscount()
    {
        $data['catedislist']= CategoryDiscount::all();
        $data['menulist'] = Menus::all();
        return view('backend.categorydiscount',$data);   
    }
    public function postCateDiscount(AddCateDiscountRequest $request)
    {
            $categorydiscount = new CategoryDiscount();
            $categorydiscount->catediscount_name = $request->name;
            $categorydiscount->catediscount_slug = str::slug($request->name);
            $categorydiscount->catediscount_menu = $request->menu;
            $categorydiscount->save();
            return back();
    }
    public function getEditCateDiscount($id){
        $data['catediscount'] = CategoryDiscount::find($id);
        $data['menu'] = Menus::all();
        return view('backend.editcategorydiscount', $data);
    }
    public function postEditCateDiscount(EditCateDiscountRequest $request,$id){
 
            $category = CategoryDiscount::find($id);
            $category->catediscount_name = $request->name;
            $category->catediscount_menu = $request->menu;
            $category->catediscount_slug = str::slug($request->name);
            $category->save();
            return redirect()->intended('admin/categorydiscount');

    }
    public function getDeleteCateDiscount($id){
            CategoryDiscount::destroy($id);
            return back();

    }
}
