<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\AddProductDiscountRequest;
use App\Http\Requests\EditProductDiscountRequest;
use App\Models\CategoryDiscount;
use App\Models\ProductDiscount;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductDiscountController extends Controller
{
    public function getProductDiscount()
    {
        $data['productdiscountlist'] = DB::table('vp_productdiscount')->join('vp_categoridiscount','vp_productdiscount.discount_cate','=','vp_categoridiscount.catediscount_id')->orderBy('discount_id','desc')->get();
        return view('backend.productdiscount', $data);
    }
    public function getAddProductDiscount()
    {
        $data['catelist'] = CategoryDiscount::all();
        return view('backend.addproductdiscount',$data);
    }
    public function postAddProductDiscount(AddProductDiscountRequest $request)
    {
        $filename = $request->img->getClientOriginalName();
        $discount = new ProductDiscount();
        $discount->discount_name = $request->name;
        $discount->discount_slug = str::slug($request->slug);
        $discount->discount_author = $request->author;
        $discount->discount_img = $filename;
        $discount->discount_accessories = $request->accessories;
        $discount->discount_price = $request->price;
        $discount->discount_warranty = $request->warranty;
        $discount->discount_promotion = $request->promotion;
        $discount->discount_condition = $request->condition;
        $discount->discount_status = $request->status;
        $discount->discount_description = $request->description;
        $discount->discount_cate = $request->cate;
        $discount->discount_featured = $request->featured;
        $discount->save();
        $request->img->storeAs('avatar',$filename);
        return back();
    }
    public function getEditProductDiscount( $id)
    {
        $data['discount'] = ProductDiscount::find($id);
        $data['listcate'] = CategoryDiscount::all();
        return view('backend.editproductdiscount',$data);

    }
    public function postEditProductDiscount( EditProductDiscountRequest $request,$id  )
    {
        $product = new ProductDiscount();
        $arr['discount_name'] = $request->name;
        $arr['discount_slug'] = str::slug($request->slug);
        $arr['discount_author'] = $request->author;
        $arr['discount_price'] = $request->price;
        $arr['discount_accessories'] = $request->accessories;
        $arr['discount_warranty'] = $request->warranty;
        $arr['discount_promotion'] = $request->promotion;
        $arr['discount_condition'] = $request->condition;
        $arr['discount_status'] = $request->status;
        $arr['discount_description'] = $request->description;
        $arr['discount_cate'] = $request->cate;
        $arr['discount_featured'] = $request->featured;
        if($request->hasFile('img')){
            $img = $request->img->getClientOriginalName();
            $arr['discount_img'] = $img;
            $request->img->storeAs('avatar'.$img);
        }
        $product::where('discount_id',$id)->update($arr);
        return redirect('admin/productdiscount');
    }
    public function getDeleteProductDiscount($id)
    {
        ProductDiscount::destroy($id);
        return back();
    }
}
