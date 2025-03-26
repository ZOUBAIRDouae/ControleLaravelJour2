<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

use Modules\PkgProduit\App\Providers\ProduitServiceProvider;


class AppServiceProvider extends ServiceProvider
{

    // protected $policies = [
    //     Article::class => ArticlePolicy::class,
    // ];
    
    public function register(): void
    {
        $this->app->register(ProduitServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Paginator::useBootstrap();
        
    }
}
