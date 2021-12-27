<?php

namespace App\View\Components\tabler;

use Illuminate\View\Component;

class pageHeader extends Component
{
    public $page_header;

    public function __construct($page_header)
    {
        $this->page_header = collect($page_header);
    }

    public function render()
    {
        return view('components.tabler.page-header');
    }


}

