<?php

namespace App\View\Composers;

use App\Models\Section;
use Illuminate\View\View;

class NavigationComposer {

    protected $settings;
    /**
     * Create a new profile composer.
     * @return void
     */
    public function __construct()
    {
        $this->settings = Section::all('name');
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('nav_items', $this->settings);
    }
}
