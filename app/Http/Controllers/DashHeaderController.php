<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashHeaderController extends Controller
{
    public $title, $breadcrumbs;

    public function __construct($title=null)
    {
        if ($title) {
            $this->title = $title;
        }
        $this->breadcrumbs = [];
    }

    public function add_breadcrumb( $name, $route)
    {
        $breadcrumbs[] = array('name'=> $name, 'route'=>$route);
    }

    public function get_breadcrumbs()
    {
        return $this->breadcrumbs;
    }

    // Get header data
    public function get()
    {
        return array(
            'title' => $this->title,
            'breadcrumbs'=> $this->breadcrumbs
        );
    }

    public function set_title(String $title)
    {
        $this->title = $title;
    }
}
