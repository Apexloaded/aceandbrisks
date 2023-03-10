<?php

namespace App\View\Components;

use Illuminate\View\Component;

class grid_blog_posts extends Component
{
    public $post;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($inp)
    {
        $this->post = $inp;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.grid-blog-posts');
    }
}
