<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Auth;
class LoginController extends Controller
{
    public function getLogin(){
        return view('backend.login');
    }

    public function postLogin(Request $request ){
        $arr = ['email' => $request-> email, 'password' => $request -> password];
        if($request->remember='Remember Me'){
            $remember = true;
        }else{
            $remember = false;
        }
        if(Auth::attempt($arr, $remember)){
            return redirect()->intended('admin/home');
        }
        else{
            return back()->withInput()->with('error','Tài khoản hoặc mật khẩu không đúng !!!');
        }
        // $data = $request->only('email','password');
        // if(Auth::attempt($data,$request->has('remember'))){
        //     if(Auth::user()->level == 1)
        //         return redirect('admin/')->with('thong bao',' Dang nhap thanh cong');
        //     else if(Auth::user()->level == 2)
        //         return redirect()->route('category')->with('thong bao','Dang nhap thanh cong');
        //     else if(Auth::user()->level == 3)
        //         return redirect()->route('product')->with('thong bao','Dang nhap thanh cong');
        // }else{
        //     return redirect()->route('login')->with('errors','Dang nhap that bai');
        // }
        
    }
}
