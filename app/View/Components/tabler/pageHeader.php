<?php

namespace App\View\Components\tabler;

use Illuminate\View\Component;

class pageHeader extends Component
{
    public $title, $breadcrumbs;

    public function __construct($title, $breadcrumbs)
    {
        $this->title = $title;
        $this->breadcrumbs = $breadcrumbs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tabler.page-header');
    }
}
