<?php

namespace App\View\Composers;

use Illuminate\View\View;

class FooterComposer {

    protected $footer;
    protected $socials;
    /**
     * Create a new profile composer.
     * @return void
     */
    public function __construct()
    {
//        $this->footer = Footer::all();
//        $this->socials = Social::all();
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with(['footer' => $this->footer,'socials' => $this->socials]);
    }
}
