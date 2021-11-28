<?php

use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\Cartcontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','FrontendController@getHome');


// Route::get('/introduce2','FrontendController@getIntroduce2');
// Route::get('/introduce2/introduceView','FronstendController@getIntroduceView');
// Route::get('/introduce2/introduceMission','FrontendController@getIntroduceMission');
// Route::get('/introduce2/introduceHistory','FrontendController@getIntroduceHistory');

// Route::get('/dieu-khoan-su-dung','FrontendController@getdksd');
// Route::get('/chinh-sach-bao-mat','FrontendController@getcsbm');

//Router Detail_Product
Route::get('detail/{id}/{slug}.html','FrontendController@getDetail');
Route::post('detail/{id}/{slug}.html','FrontendController@postComment');

//Router Detail_ProductDiscount
Route::get('detaildiscount/{id}/{slug}.html','FrontendController@getDetailDisCount');
Route::post('detaildiscount/{id}/{slug}.html','FrontendController@postCommentDiscount');

//Router Detail_News
Route::get('detailsnews/{id}/{slug}.html','FrontendController@getDetailNews');
Route::post('detailsnews/{id}/{slug}.html','FrontendController@postCommentnews');

//Router Detail_Service
Route::get('detailservice/{id}/.html','FrontendController@getDetailService');
Route::post('detailservice/{id}/.html','FrontendController@postCommentService');

//Router Detail_Introduce
Route::get('detailsintroduce/{id}/.html','FrontendController@getDetailsIntroduce');




Route::get('category/{id}/{slug}.html','FrontendController@getCategory');

Route::get('categorydiscount/{id}/{slug}.html','FrontendController@getCategoryDiscount');

Route::get('information/{id}/{slug}.html','FrontendController@getInformation');

Route::get('service/{id}/{slug}.html','FrontendController@getService');

Route::get('introduce/{id}/{slug}.html','FrontendController@getIntroduce');

Route::get('search','FrontendController@getSearch');


Route::group(['prefix' =>'cart'], function(){
    Route::group(['namespace' => '\App\Http\Controllers'], function(){
    Route::get('add/{id}','CartController@getAddCart');
    Route::get('adddiscount/{id}','CartController@getAddCartDiscount');
    Route::get('show','CartController@getShowCart');
    Route::get('delete/{id}','CartController@getDeleteCart');
    Route::get('update','CartController@getUpdateCart');
    Route::post('show','CartController@postComplete');
    });
});


// Route::group(['prefix' =>'cartdiscount'], function(){
//     Route::group(['namespace' => '\App\Http\Controllers'], function(){
//     Route::get('add/{id}','CartDiscountController@getAddCartDiscount');
//     Route::get('show','CartDiscountController@getShowCartDiscount');
//     Route::get('delete/{id}','CartDiscountController@getDeleteCartDiscount');
//     Route::get('update','CartDiscountController@getUpdateCartDiscount');
//     Route::post('show','CartDiscountController@postCompleteDiscount');
//     });
// });



Route::get('complete','CartController@getComplete');

Route::get('completediscount','CartDiscountController@getCompleteDiscount');

Route::group(['namespace'=>'Admin'], function(){
    Route::group(['prefix'=>'login','middleware'=>'CheckLogedIn'], function(){
        Route::get('/','LoginController@getLogin');
        Route::post('/','LoginController@postLogin');
        
    });
    Route::get('logout','HomeController@getLogout');
    
    

    Route::group(['prefix'=>'admin','middleware'=>'CheckLogedOut'], function(){
        // route get home
        Route::get('home','HomeController@getHome');
       
         // route register
         Route::group(['prefix'=>'user'], function(){
            Route::get('register','RegisterController@getRegister');
            Route::post('register','RegisterController@postRegister');
            Route::get('edit/{id}','RegisterController@getEditRegister');
            Route::post('edit/{id}','RegisterController@postEditRegister');
            Route::get('delete/{id}','RegisterController@getDeleteRegister');
         });
       
        // router category
        Route::group(['prefix'=>'category'], function(){
            Route::get('/','CategoryController@getCate');
            Route::post('/','CategoryController@postCate');

            Route::get('edit/{id}','CategoryController@getEditCate');
            Route::post('edit/{id}','CategoryController@postEditCate');

            Route::get('delete/{id}','CategoryController@getDeleteCate');
        });

        // route product
        Route::group(['prefix'=>'product'], function(){
            Route::get('/','ProductController@getProduct');

            Route::get('add','ProductController@getAddProduct');
            Route::post('add','ProductController@postAddProduct');

            Route::get('edit/{id}','ProductController@getEditProduct');
            Route::post('edit/{id}','ProductController@postEditProduct');

            Route::get('delete/{id}','ProductController@getDeleteProduct');
        });

        // router category discount
        Route::group(['prefix'=>'categorydiscount'], function(){
            Route::get('/','CategoryDiscountController@getCateDiscount');
            Route::post('/','CategoryDiscountController@postCateDiscount');

            Route::get('edit/{id}','CategoryDiscountController@getEditCateDiscount');
            Route::post('edit/{id}','CategoryDiscountController@postEditCateDiscount');

            Route::get('delete/{id}','CategoryDiscountController@getDeleteCateDiscount');
        });

        

        // route productdiscount
        Route::group(['prefix'=>'productdiscount'], function(){
            Route::get('/','ProductDiscountController@getProductDiscount');

            Route::get('add','ProductDiscountController@getAddProductDiscount');
            Route::post('add','ProductDiscountController@postAddProductDiscount');

            Route::get('edit/{id}','ProductDiscountController@getEditProductDiscount');
            Route::post('edit/{id}','ProductDiscountController@postEditProductDiscount');

            Route::get('delete/{id}','ProductDiscountController@getDeleteProductDiscount');
        });

        // route information
        Route::group(['prefix'=>'information'], function(){
            Route::get('/','InformationController@getInfo');
            Route::post('/','InformationController@postInfo');

            Route::get('edit/{id}','InformationController@getEditInfo');
            Route::post('edit/{id}','InformationController@postEditInfo');

            Route::get('delete/{id}','InformationController@getDeleteInfo');
        });

        // route news
        Route::group(['prefix'=>'news'], function(){
            Route::get('/','newsController@getNews');

            Route::get('add','newsController@getAddNews');
            Route::post('add','newsController@postAddNews');

            Route::get('edit/{id}','newsController@getEditNews');
            Route::post('edit/{id}','newsController@postEditNews');

            Route::get('delete/{id}','newsController@getDeleteNews');
        });

        // route service
        Route::group(['prefix'=>'service'], function(){
            Route::get('/','ServiceController@getService');
            Route::post('/','ServiceController@postService');

            Route::get('edit/{id}','ServiceController@getEditService');
            Route::post('edit/{id}','ServiceController@postEditService');

            Route::get('delete/{id}','ServiceController@getDeleteService');
        });

        //route infor_Service
        Route::group(['prefix'=>'contentsv'], function(){
            Route::get('/','ContentsvController@getContentsv');

            Route::get('add','ContentsvController@getAddContentsv');
            Route::post('add','ContentsvController@postAddContentsv');

            Route::get('edit/{id}','ContentsvController@getEditContentsv');
            Route::post('edit/{id}','ContentsvController@postEditContentsv');

            Route::get('delete/{id}','ContentsvController@getDeleteContentsv');
        });

        

        // router menu
        Route::group(['prefix'=>'menu'], function(){
            Route::get('/','MenuConTroller@getMenu');
            Route::post('/','MenuConTroller@postMenu');

            Route::get('edit/{id}','MenuConTroller@getEditMenu');
            Route::post('edit/{id}','MenuConTroller@postEditMenu');

            Route::get('delete/{id}','MenuConTroller@getDeleteMenu');
        });

        // router introduce
        Route::group(['prefix'=>'introduce'], function(){
            Route::get('/','IntroduceController@getIntro');
            Route::post('/','IntroduceController@postIntro');

            Route::get('edit/{id}','IntroduceController@getEditIntro');
            Route::post('edit/{id}','IntroduceController@postEditIntro');

            Route::get('delete/{id}','IntroduceController@getDeleteIntro');
        });
          // route content_introduce
          Route::group(['prefix'=>'contentintro'], function(){
            Route::get('/','ContentIntroController@getContentintro');

            Route::get('add','ContentIntroController@getAddContentintro');
            Route::post('add','ContentIntroController@postAddContentintro');

            Route::get('edit/{id}','ContentIntroController@getEditContentintro');
            Route::post('edit/{id}','ContentIntroController@postEditContentintro');

            Route::get('delete/{id}','ContentIntroController@getDeleteContentintro');
        });
        // router event
        Route::group(['prefix'=>'event'], function(){
            Route::get('/','EventController@getEvent');
            Route::post('/','EventController@postEvent');

            Route::get('edit/{id}','EventController@getEditEvent');
            Route::post('edit/{id}','EventController@postEditEvent');

            Route::get('delete/{id}','EventController@getDeleteEvent');
        });

         // route event content
         Route::group(['prefix'=>'eventcontent'], function(){
            Route::get('/','EventContentController@getEvcontent');

            Route::get('add','EventContentController@getAddEvcontent');
            Route::post('add','EventContentController@postAddEvcontent');

            Route::get('edit/{id}','EventContentController@getEditEvcontent');
            Route::post('edit/{id}','EventContentController@postEditEvcontent');

            Route::get('delete/{id}','EventContentController@getDeleteEvcontent');
        });
    });
});

