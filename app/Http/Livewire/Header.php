<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Header extends Component
{
    public $isMenuClicked = false;

    public function __construct() {

    }

    public function render() {
        return view('livewire.header');
    }

    public function toggleMenu() {
        if($this->isMenuClicked) {
            $this->isMenuClicked = false;
            return;
        }
        $this->isMenuClicked = true;
        return;
    }
}
