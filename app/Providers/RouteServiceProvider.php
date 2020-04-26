<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapAdminUsuarioRoutes();
        
        $this->mapAdminProveedorRoutes();

        $this->mapAdminCategoriaRoutes();

        $this->mapAdminClienteRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }

    protected function mapAdminUsuarioRoutes(){
        Route::middleware(['web', 'auth','verified'])
            ->namespace($this->namespace)
            ->prefix('/admin/usuario')
            ->group(base_path('routes/admin/usuario.php'));
    }

    protected function mapAdminProveedorRoutes(){
        Route::middleware(['web', 'auth','verified'])
            ->namespace($this->namespace)
            ->prefix('/admin/proveedor')
            ->group(base_path('routes/admin/proveedor.php'));
    }

     protected function mapAdminCategoriaRoutes(){
        Route::middleware(['web', 'auth','verified'])
            ->namespace($this->namespace)
            ->prefix('/admin/categoria')
            ->group(base_path('routes/admin/categoria.php'));
    }

    protected function mapAdminClienteRoutes(){
        Route::middleware(['web', 'auth','verified'])
            ->namespace($this->namespace)
            ->prefix('/admin/cliente')
            ->group(base_path('routes/admin/cliente.php'));
    }
         
}
