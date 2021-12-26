<?php

namespace App\Http\Livewire\Tabler;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        return view('livewire.tabler.header');
    }

    public $avatar, $name, $function, $notifications;

    public function mount()
    {
        // $user = Auth::user();
        if(Auth::check()){

        }else{
            $this->avatar = "tabler/dist/img/avatars/000m.jpg";
            $this->name= 'Paweł Kuna';
            $this->function = 'UI Designer';
            $this->notifications= collect([1]);
        }
    }

}
