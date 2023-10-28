<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class EventExample extends Component
{
    #[On('event-example')]
    public function doSomething()
    {
        dd('something');
    }

    public function dispatchSomeEvent()
    {
        $this->dispatch('event-example');
    }

    public function render()
    {
        return view('livewire.event-example');
    }
}
