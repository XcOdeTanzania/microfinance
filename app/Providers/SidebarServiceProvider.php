<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class SidebarServiceProvider extends ServiceProvider
{

    /**
     * Sidebar service.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            'layouts.includes.sidebar', 'App\Http\ViewComposers\SidebarViewComposer'
        );

        View::composer(
            'layouts.includes.header-horizontal', 'App\Http\ViewComposers\SidebarViewComposer'
        );
    }
}
