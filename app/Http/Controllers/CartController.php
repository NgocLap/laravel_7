<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductDiscount;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Mail;
class Cartcontroller extends Controller
{
    public function getAddCart($id){
        $product = Product::find($id);
        Cart::add(['id'=>$id,'name'=>$product->prod_name,'qty' => 1 ,'weight'=>660 ,'price'=>$product->prod_price  ,  'options' =>['img'=> $product->prod_img ,'promotion'=>$product->prod_promotion ]]);
        return redirect('cart/show');
    }
    public function getAddCartDiscount($id){
        $product = ProductDiscount::find($id);
        Cart::add(['id'=>$id,'name'=>$product->discount_name,'qty' => 1 ,'weight'=>660 ,'price'=>$product->discount_price  ,  'options' =>['img'=> $product->discount_img ,'promotion'=>$product->discount_promotion ]]);
        return redirect('cart/show');
    }
    public function getShowCart(){
        // $data['total'] = Cart::total();
        $data['items'] = Cart::content();
        return view('frontend.cart',$data);
    }
    public function getDeleteCart($id){
        if($id=='all')
        {
            Cart::destroy();
        }else{
            Cart::remove($id);
        }
        return back();                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
    }
    public function getUpdateCart(Request $request){
        Cart::update($request->rowId,$request->qty);
    }
    public function postComplete(Request $request){
        $data['info'] = $request->all();
        $email = $request->email;
        $data['total'] =Cart::total();
        $data['cart']=Cart::content();
        Mail::send('frontend.email',$data, function($message)use($email){
            $message->from('ngoclap858@gmail.com','L????ng Ng???c L???p');
            $message->to($email, $email);
            $message->cc('ngoclap585@gmail.com','L????ng Ng???c L???p');
            $message->subject('X??c nh???n h??a ????n mua h??ng BookShop');
        });
        Cart::destroy();
        return redirect('complete');
    }
    public function getComplete(){
        return view('frontend.complete');
    }
}
