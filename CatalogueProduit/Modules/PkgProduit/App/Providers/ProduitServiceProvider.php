<?php

namespace Modules\PkgProduit\App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class ProduitServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
        $this->loadViewsFrom(__DIR__.'/../../Views', 'PkgProduit');
        $this->loadTranslationsFrom(__DIR__.'/../../lang' , 'PkgProduit');
        
        $this->publishes([
            __DIR__.'/../../Views' => resource_path('Views/vendor/PkgProduit'),
        ], 'PkgProduit-Views');
        
        
    }

    public function register()
    {
        // Enregistrer d'autres services si nécessaire
    }
}