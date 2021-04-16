<?php

namespace App\View\Composers;

use App\Models\Project;
use Illuminate\View\View;

class ProjectsComposer {

    protected $projects;

    /**
     * Create a new profile composer.
     */
    public function __construct()
    {
        $this->projects = Project::all();
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('projects', $this->projects);
    }
}
