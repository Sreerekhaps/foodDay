<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Itemfood;
use App\Models\Restaurant;

class Fooditem extends Component
{
    public $itemfoods;
    public $restaurant;
    
    
    
    public function mount($restaurant){

        $this->itemfoods=Itemfood::all();
        
        $this->restaurant=$restaurant->itemfoods;
    }
    public function addToCart($id){
        
        dd($id);
    }

    public function render()
    {
        return view('livewire.fooditem');
    }
    
    
}
