<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class IconesServicos extends Component
{
    public $title;
    public $description;
    public $icone;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $description, $icone)
    {
        $this->title = $title;
        $this->description = $description;
        $this->icone = $icone;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.icones-servicos');
    }
}
