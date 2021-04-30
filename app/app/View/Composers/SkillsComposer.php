<?php

namespace App\View\Composers;

use App\Models\Skill;
use Illuminate\View\View;

class SkillsComposer {

    protected $skills;

    /**
     * Create a new profile composer.
     */
    public function __construct()
    {
        $this->skills = Skill::all();
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('skills', $this->skills);
    }
}
