<?php

namespace App\Livewire;

use Livewire\Component;

class Second extends Component
{
    public function send_navigate() {
        $this->redirect('/first');
    }

    public function render()
    {
        return view('livewire.second');
    }
}
