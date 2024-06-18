<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Nav extends Component
{
    public $count = 1;
 
    public function increment()
    {
        $this->count = User::first();
        $this->count++;
    }
 
    public function decrement()
    {
        $this->count--;
    }
    
    public function render()
    {
        return view('livewire.nav');
    }
}
