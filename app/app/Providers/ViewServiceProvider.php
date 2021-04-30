<?php

namespace App\Providers;

use App\View\Composers\ProjectsComposer;
use App\View\Composers\NavigationComposer;
use App\View\Composers\SkillsComposer;
use App\View\Composers\FooterComposer;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('components.sections.navigation',NavigationComposer::class);
        View::composer('components.sections.projects', ProjectsComposer::class);
        View::composer('components.sections.skills', SkillsComposer::class);
        View::composer('components.sections.footer', FooterComposer::class);
    }
}
