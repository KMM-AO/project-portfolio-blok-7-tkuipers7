<?php

namespace App\View\Components\sections;

use Illuminate\View\Component;

class landing extends Component
{
    public $data;

    /**
     * Create a new component instance.
     *
     * @param string $attributes
     * @param string $data
     */
    public function __construct($data = 'something')
    {
        $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sections.landing');
    }
}
