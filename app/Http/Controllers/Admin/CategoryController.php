<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\AddCateRequest;
use Illuminate\Support\Str;
use App\Http\Requests\EditCateRequest;
use App\Models\Menus;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Catch_;

class CategoryController extends Controller
{
    public function getCate()
    {
        $data['catelist']= Category::all();
        $data['menulist'] = Menus::all();
        return view('backend.category',$data);
        
    }
    public function postCate(AddCateRequest $request)
    {
            $category = new Category;
            $category->cate_name = $request->name;
            $category->cate_slug = str::slug($request->name);
            $category->cate_menu = $request->menu;
            $category->save();
            return back();

    }
    public function getEditCate($id){
        $data['cate'] = Category::find($id);
        $data['menu'] = Menus::all();
        return view('backend.editcategory', $data);
    }
    public function postEditCate(EditCateRequest $request,$id){
 
            $category = Category::find($id);
            $category->cate_name = $request->name;
            $category->cate_menu = $request->menu;
            $category->cate_slug = str::slug($request->name);
            $category->save();
            return redirect()->intended('admin/category');

    }
    public function getDeleteCate($id){
            Category::destroy($id);
            return back();

    }
}
