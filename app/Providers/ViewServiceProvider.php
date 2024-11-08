<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Services\ProductService;

class ViewServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        View::composer(['bav.app','bav.layouts.index','bav.layouts.nav'], function ($view) {
            $tourService = new ProductService();
            $tours = $tourService->getAllProduct();
            $category = $tourService->getCategory();
            $tags_products = $tourService->getTagsProducts();

            $view->with([
                    'global_tours' => $tours,
                    'global_category' => $category,
                    'global_tags_products' => $tags_products,
                ]);
        });
    }
}
