<?php

namespace App\Livewire;

use Livewire\Component;

class First extends Component
{
    public function send_navigate() {
        $this->redirect('/second',navigate: true);
    }

    public function render()
    {
        return view('livewire.first');
    }
}
