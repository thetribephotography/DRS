<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Minicard extends Component
{
    public $uploads;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($uploads)
    {
        //
        $this->uploads = $uploads;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.minicard');
    }
}
