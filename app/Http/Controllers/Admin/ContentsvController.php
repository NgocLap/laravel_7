<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddContentsvRequest;
use App\Models\Contentsv;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContentsvController extends Controller
{
    public function getContentsv(){
        $data['contentlist'] = DB::table('vp_contentsv')->join('vp_service','vp_contentsv.content_cate','=','vp_service.ser_id')->orderBy('content_id','desc')->get();
        return view('backend.contentsv',$data);
    }
    public function getAddContentsv(){
        $data['servicelist'] = Service::all();
        return view('backend.addcontentsv',$data);
    }
    public function postAddContentsv(AddContentsvRequest $request){
        $filename = $request->img->getClientOriginalName();
        $contentsv = new Contentsv();
        $contentsv->content_img = $filename;
        $contentsv->content_description = $request->description;
        $contentsv->content_cate = $request->cate;
        $contentsv->save();
        $request->img->storeAs('avatar',$filename);
        return back();
    }
    public function getEditContentsv($id){
        $data = [
            'contentsv' => Contentsv::find($id),
            'listser' => Service::all()
        ];

        return view('backend.editcontentsv', $data);
    }
    public function postEditContentsv(Request $request, $id){
        $sv = Contentsv::find($id);        
        $sv->content_description = $request->description;
        $sv->content_cate = $request->cate;
        if($request->hasFile('img')){
            $img = $request->img->getClientOriginalName();
            $sv->content_img = $img;
            $request->img->storeAs('avatar', $img);
        }
        $sv->save();
        return redirect('admin/contentsv');
    }
    public function getDeleteContentsv($id){
        Contentsv::destroy($id);
        return back();
    }
}
