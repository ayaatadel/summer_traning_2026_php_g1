<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
class BtnComponent extends Component
{
    public $class;
    public $text;

    public function __construct($class = "primary", $text = "button")
    {
        $this->class = $class;
        $this->text = $text;
    }

    public function render()
    {
        return view('components.btn-component');
    }
}
