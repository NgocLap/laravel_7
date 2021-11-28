<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\CategoryDiscount;
use App\Models\Comment;
use App\Models\CommentDiscount;
use App\Models\Commentnews;
use App\Models\Information;
use App\Models\News;
use App\Models\Service;
use App\Models\Contentsv;
use App\Models\CommentSV;
use App\Models\ContentIntro;
use App\Models\Introduce;
use App\Models\Menus;
use App\Models\ProductDiscount;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function getHome(){

        // Lấy sản phảm đặc biệt và nổi bật ra
        $data['featured'] = Product::where('prod_featured',1)->orderBy('prod_id','desc')->take(20)->get();
        $data['news'] = Product::orderBy('prod_id','desc')->take(300)->get();
        
        // Lấy sản phảm giảm giá 
        $data['discount'] = ProductDiscount::orderBy('discount_id','desc')->take(300)->get();
            
        // Lấy tin tức đặc biệt và nổi bật ra
        $data['featured2'] = News::where('news_featured',1)->orderBy('news_id' ,'desc')->take(3)->get();
        $data['news2'] = News::orderBy('news_id','desc')->take(4)->get();

        // Lấy dịch vụ đặc biệt và nổi bật ra
        $data['featured3'] = Contentsv::orderBy('content_id' ,'desc')->take(2)->get();
        $data['news3'] = Contentsv::orderBy('content_id','desc')->take(2)->get();

        return view('frontend.home',$data);
    }
    // Chi Tiết Sản Phẩm
    public function getDetail($id){
        // Lấy tên tiêu đề  vF THÔNG TIN sản phẩm
        $data['item'] = Product::find($id);
        // Bình Luận
        $data['comments'] = Comment::where('com_product',$id)->get();
       
        return view ('frontend.details',$data);
    }

     // Chi Tiết Sản Phẩm Giảm Giá
    public function getDetailDisCount($id){
        // Lấy tên tiêu đề  vF THÔNG TIN sản phẩm giam gia
        $data['itemdiscount'] = ProductDiscount::find($id);
        // Bình Luận
        $data['comments'] = CommentDiscount::where('comdiscount_product',$id)->get();
       
        return view ('frontend.detaildiscount',$data);
    }

    public function getDetailNews($id){
        // Lấy tên tiêu đề tin tức vF THÔNG TIN sản phẩm
        $data['item'] = News::find($id);
        // Bình Luận
        $data['comments'] = Commentnews::where('com_news',$id)->get();
        return view ('frontend.detailsnews', $data);
    }
    public function getDetailService($id){
        // Lấy tên tiêu đề dịch vụ vF THÔNG TIN sản phẩm
        $data['item'] = Contentsv::find($id);
         //  Danh sách Bình Luận 
        $data['comments'] = CommentSV::where('com_contentsv',$id)->get();
        return view ('frontend.detailservice', $data);
    }

    public function getDetailsIntroduce($id){
        // Lấy tên tiêu đề dịch vụ vF THÔNG TIN sản phẩm
        $data['item'] = ContentIntro::find($id);
         // Bình Luận
        // $data['comments'] = CommentSV::where('com_contentsv',$id)->get();
        return view ('frontend.detailsintroduce', $data);
    }


    public function getCategory($id){

        $data ['cateName'] = Category::find($id);
        // Hiển thị sản phẩm theo danh mục  và paginate là phân trang theo số lượng sản phẩm
        $data['items'] = Product::where('prod_cate',$id)->orderBy('prod_id','desc')->paginate(2);
        return view('frontend.category',$data);
    }
    public function getCategoryDiscount($id){

        $data ['cateName'] = CategoryDiscount::find($id);
        // Hiển thị sản phẩm theo danh mục  và paginate là phân trang theo số lượng sản phẩm
        $data['items'] = ProductDiscount::where('discount_cate',$id)->orderBy('discount_id','desc')->paginate(2);
        return view('frontend.categorydiscount',$data);
    }
    public function getInformation($id){
        // Hiển thị Tin tức theo danh mục 
        $data ['inforName'] = Information::find($id);
        $data['items'] = News::where('news_cate',$id)->orderBy('news_id','desc')->paginate(2);
        return view('frontend.information',$data);
    }

    public function getService($id){
    // Hiển thị Dịch Vụ theo danh mục 
    $data ['serName'] = Service::find($id);
      $data['items'] = Contentsv::where('content_cate',$id)->orderBy('content_id','desc')->paginate(2);
        return view('frontend.service',$data);
    }

    public function getIntroduce($id){
        // Hiển thị Giới Thiệu theo danh mục 
        $data ['introName'] = Introduce::find($id);
          $data['items'] = ContentIntro::where('contentintro_intro',$id)->orderBy('contentintro_id','desc')->paginate(2);
            return view('frontend.introduce',$data);
        }

    //Bình Luận Sách
    public function postComment(Request $request, $id){
        $comment = new Comment();
        $comment->com_name = $request->name;
        $comment->com_email = $request->email;
        $comment->com_content = $request->content;
        $comment->com_product= $id;
        $comment->save();
        return back();
    }

    //Bình Luận Sách Discount
    public function postCommentDiscount(Request $request, $id){
        $comment = new CommentDiscount();
        $comment->comdiscount_name = $request->name;
        $comment->comdiscount_email = $request->email;
        $comment->comdiscount_content = $request->content;
        $comment->comdiscount_product= $id;
        $comment->save();
        return back();
    }
     //Bình Luận Tin tức
    public function postCommentnews(Request $request, $id){
        $comment = new Commentnews();
        $comment->com_name = $request->name;
        $comment->com_email = $request->email;
        $comment->com_content = $request->content;
        $comment->com_news= $id;
        $comment->save();
        return back();
    }

    //Bình Luận Dịch Vụ
    public function postCommentService(Request $request, $id){
        $comment = new CommentSV();
        $comment->com_name = $request->name;
        $comment->com_email = $request->email;
        $comment->com_content = $request->content;
        $comment->com_contentsv= $id;
        $comment->save();
        return back();
    }

    // Tìm Kiếm
    public function getSearch(Request $request){
        $result = $request->result;
        $data['keyword'] = $result;
        $result = str_replace('', '%', $result);
        
        $data['items'] = Product::where('prod_name','like','%'.$result.'%')->get();
        $data['items2'] = News::where('news_name','like','%'.$result.'%')->get();
        $data['items3'] = ProductDiscount::where('discount_name','like','%'.$result.'%')->get();

        return view('frontend.search', $data);
    }

    // public function getIntroduce2(){
    //     return view('frontend.introduce2');
    // }
    // public function getIntroduceView(){
    //     return view('frontend.introduceView');
    // }
    // public function getIntroduceMission(){
    //     return view('frontend.introduceMission');
    // }
    // public function getIntroduceHistory(){
    //     return view('frontend.introduceHistory');
    // }
    // public function getdksd(){
    //     return view('frontend.dksd');
    // }
    // public function getcsbm(){
    //     return view('frontend.csbm');
    // }


}
