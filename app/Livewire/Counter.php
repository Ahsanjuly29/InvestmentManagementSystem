<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Counter extends Component
{
    public $count = 1;

    public function increment()
    {
        Cache::put('key', 'value', 'ttl');

        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
