<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Services\ProductService;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['bav.app','bav.layouts.index','bav.layouts.nav'], function ($view) {
            $tourService = new ProductService();
            $tours = $tourService->getAllProduct();
            $category = $tourService->getCategory();
            $view->with([
                    'global_tours' => $tours,
                    'global_category' => $category,
                ]);
        });
    }
}
