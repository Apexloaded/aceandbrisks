<?php

namespace App\View\Components;

use Illuminate\View\Component;

class recent_uploads extends Component
{
    public $recent;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($inp)
    {
        $this->recent = $inp;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.recent-uploads');
    }
}
