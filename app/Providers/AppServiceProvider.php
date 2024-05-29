<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\NoticeBoard;
use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use App\Models\Page;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       if(Schema::hasTable('notice_boards')){
            View::share('notices', NoticeBoard::latest()->get());
        }


        if(Schema::hasTable('settings')){
            View::share('settings', Setting::find(1));
        }

       if(Schema::hasTable('pages')){
            View::share('pages', Page::where('status', 1)->latest()->get());
        }

     
        
    }
}