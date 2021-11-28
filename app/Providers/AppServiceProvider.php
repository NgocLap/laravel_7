<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\CategoryDiscount;
use App\Models\Contentsv;
use App\Models\Event;
use App\Models\EventContent;
use App\Models\Information;
use App\Models\Introduce;
use App\Models\Menus;
use App\Models\News;
use App\Models\Product;
use App\Models\ProductDiscount;
use App\Models\Service;
use Gloudemans\Shoppingcart\Facades\Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Hiển thị danh mục chung
        $data['categories'] = Category::all();
        view ()->share($data);

        $data['information'] = Information::all();
        view ()->share($data);

        $data['service'] = Service::all();
        view ()->share($data);

        $data['menu'] = Menus::all();
        view ()->share($data);

        $data['introduce'] = Introduce::all();
        view ()->share($data);

        $data['categoridiscount'] = CategoryDiscount::all();
        view ()->share($data);

        $data['event'] = Event::all();
        view ()->share($data);

        $data['evcontent'] = EventContent::all();
        view ()->share($data);

    }
}
