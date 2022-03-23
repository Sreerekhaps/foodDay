<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Itemfood;

class Cart extends Component
{
    public $show = false;

    protected $listeners = [
        'increment' => 'refreshComponent',
        'decrement' => 'refreshComponent',

    ];

    public function refreshComponent(){
        $this->show=true;

    }

    public function render()
    {
        
        return view('livewire.cart');
    }
}
