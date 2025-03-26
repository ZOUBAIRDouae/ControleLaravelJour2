<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Le namespace utilisé par le contrôleur de l'application.
     *
     * @var string|null
     */
    protected $namespace = 'Modules\PkgProduit\Controllers';

    /**
     * Définir les routes pour l'application.
     */
    public function boot()
    {
        parent::boot();

        $this->mapWebRoutes();
    }

    /**
     * Définir les routes web de l'application.
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }
}
