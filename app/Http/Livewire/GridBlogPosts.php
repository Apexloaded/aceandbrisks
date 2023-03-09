<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Controllers\PostController;

class GridBlogPosts extends Component
{
    /**************************************************
     * @Display 1 = Grid cols 3
     * @Display 2 = Grid cols 2
     * @Display 3 = List view
    ***************************************************/
    public $display = 1;

    public function render(){
        $properties = PostController::getAllProperties();
        return view('livewire.grid-blog-posts', compact('properties'));
    }

    public function toggleView($view) {
        $this->display = $view;
    }
}
