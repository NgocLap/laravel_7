<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Introduce;
use App\Http\Requests\AddContentIntroRequest;
use App\Models\ContentIntro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContentIntroController extends Controller
{
    public function getContentintro(){
        $data['contentlist'] = DB::table('vp_contentintro')->join('vp_introduce','vp_contentintro.contentintro_intro','=','vp_introduce.intro_id')->orderBy('contentintro_id','desc')->get();
        return view('backend.contentintro',$data);
    }
    public function getAddContentintro(){
        $data['introlist'] = Introduce::all();
        return view('backend.addcontentintro',$data);
    }
    public function postAddContentintro(AddContentIntroRequest $request){
        $filename = $request->img->getClientOriginalName();
        $contentintro = new ContentIntro();
        $contentintro->contentintro_img = $filename;
        $contentintro->contentintro_description = $request->description;
        $contentintro->contentintro_intro = $request->intro;
        $contentintro->save();
        $request->img->storeAs('avatar',$filename);
        return back();
    }
    public function getEditContentintro($id){
        $data = [
            'contentintro' => ContentIntro::find($id),
            'listintro' => Introduce::all()
        ];

        return view('backend.editcontentintro', $data);
    }
    public function postEditContentintro(Request $request, $id){
        $sv = ContentIntro::find($id);        
        $sv->contentintro_description = $request->description;
        $sv->contentintro_intro = $request->intro;
        if($request->hasFile('img')){
            $img = $request->img->getClientOriginalName();
            $sv->contentintro_img = $img;
            $request->img->storeAs('avatar', $img);
        }
        $sv->save();
        return redirect('admin/contentintro');
    }
    public function getDeleteContentintro($id){
        ContentIntro::destroy($id);
        return back();
    }
}
