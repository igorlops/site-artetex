<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class VideoNovidades extends Component
{

    public $urlVideo;
    public $textVideo;
    /**
     * Create a new component instance.
     */
    public function __construct($urlVideo,$textVideo)
    {
        $this->urlVideo = $urlVideo;
        $this->textVideo = $textVideo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.video-novidades');
    }
}
