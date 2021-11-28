<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddRegister;
use App\Http\Requests\EditUser;
use App\Models\User;
class RegisterController extends Controller
{
    public function getRegister(){
        $data['userlist']= User::all();
        return view('backend.register',$data);
    }
    public function postRegister(AddRegister $request){
        $user = new User;
        $user->username = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        //  bcrypt($request->password)
        $user->level = $request->level;
        $user->save();
        return back();
    }
    public function getEditRegister($id){
        $data['user'] = User::find($id);
        return view('backend.edituser', $data);
    }
    public function postEditRegister(EditUser $request,$id){
        $user = User::find($id);
        $user->username = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->level = $request->level;
        $user->save();
        return redirect()->intended('admin/user/register');
        
    }
    public function getDeleteRegister($id){
        User::destroy($id);
        return back();
    }
}
