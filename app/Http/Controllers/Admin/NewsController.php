<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddNewsRequest;
use App\Models\News;
use Illuminate\Support\Str;
use App\Models\Information;
use App\Models\Menus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB ;

class NewsController extends Controller
{
    public function getNews(){
        $data['newslist'] = DB::table('vp_news')->join('vp_information','vp_news.news_cate','=','vp_information.cate_id')->orderBy('news_id','desc')->get();
        return view('backend.news', $data);
    }
    public function getAddNews(){
        $data['inforlist'] = Information::all();
        // $data['informenu'] = Menus::all();
        return view('backend.addnews',$data);
    }
    public function postAddNews(AddNewsRequest $request){
        $filename = $request->img->getClientOriginalName();
        $news = new News();
        $news->news_name = $request->name;
        $news->news_slug = str::slug($request->name);
        $news->news_img = $filename;
        $news->news_author = $request->author;
        $news->news_date = $request->date;
        $news->news_description = $request->description;
        $news->news_content = $request->content;
        $news->news_cate = $request->cate;
        // $news->news_menu = $request->menu;
        $news->news_featured = $request->featured;
        $news->save();
        $request->img->storeAs('avatar',$filename);
        return back();
    }
    public function getEditNews($id){
        $data['news'] = News::find($id);
        $data['inforlist'] = Information::all();
        return view('backend.editnews', $data);
    }
    public function postEditNews(Request $request,$id){
        $news = new News();
        $arr['news_name'] = $request->name;
        $arr['news_slug'] = str::slug($request->name);
        $arr['news_author'] = $request->author;
        $arr['news_date'] = $request->date;
        $arr['news_description'] = $request->description;
        $arr['news_content'] = $request->content;
       // $arr['prod_warranty'] = $request->warranty;
       // $arr['prod_promotion'] = $request->promotion;
      //  $arr['prod_condition'] = $request->condition;
      //  $arr['prod_status'] = $request->status;
        $arr['news_cate'] = $request->cate;
        // $arr['news_menu'] = $request->menu;
        $arr['news_featured'] = $request->featured;
        if($request->hasFile('img')){
            $img = $request->img->getClientOriginalName();
            $arr['news_img'] = $img;
            $request->img->storeAs('avatar'.$img);
        }
        $news::where('news_id',$id)->update($arr);
        return redirect('admin/news');
    }
    public function getDeleteNews($id){
        News::destroy($id);
        return back();
    }
   
}
