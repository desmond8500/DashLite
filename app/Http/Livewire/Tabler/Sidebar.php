<?php

namespace App\Http\Livewire\Tabler;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Sidebar extends Component
{
    public function render()
    {
        return view('livewire.tabler.sidebar',[
            'user' => Auth::user(),
            'menus' => $this->menu(),
        ]);
    }

    // Sidemenu
    public function menu()
    {
        return [
            (object) array(
                'name' => 'Docs',
                'can' => 'menu docs',
                'icon' => '',
                'submenu' => [
                    (object) array('name' => 'Accueil',  'route' => 'tabler.index'),
                    (object) array('name' => 'Clients',  'route' => 'tabler.clients'),
                ]
            ),
        ];
    }
}
