<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    
    public const HOME = '/dashboard';
   
    

    protected $namespaceAdmin ='App\\Http\\Controllers\\Admin';
    protected $namespaceFrontend ='App\\Http\\Controllers\\Frontend';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
       

      
        $this->routes(function () {
        
       
            Route::middleware('web')
                ->prefix('admin')
                ->namespace($this->namespaceAdmin) 
                ->group(base_path('routes/admin.php'));
            
            Route::middleware('web')
                ->namespace($this->namespaceFrontend) 
                ->group(base_path('routes/frontend.php'));

        });
    }
}