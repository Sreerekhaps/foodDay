<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Itemfood;
use App\Models\Restaurant;

class Fooditem extends Component
{
    public $itemfoods;
    public $restaurant=[];
    
    
    public function mount($restaurant){

        $this->itemfoods=Itemfood::all();

        
        $this->restaurant=$restaurant->itemfoods;
    }

    public function addToCart($id)
    {
        $itemfoods = Itemfood::findOrFail($id);
           
        $cart = session()->get('cart', []);
        
   
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "food_item" => $itemfoods->food_item,
                "quantity" => 1,
                "rate" => $itemfoods->rate,
                
            ];
        }
          
        session()->put('cart', $cart);
        
        $this->emit('increment');
    }
    
    public function removeFromCart($id){
        $itemfoods = Itemfood::findOrFail($id);
           
        $cart = session()->get('cart', []);
   
        if(isset($cart[$id])) {
            $cart[$id]['quantity']--;
        } else {
            $cart[$id] = [
                "food_item" => $itemfoods->food_item,
                "quantity" => 1,
                "rate" => $itemfoods->rate,
            
                
            ];
        }
          
        session()->put('cart', $cart);
        $this->emit('decrement');
    }

    public function render()
    {
        return view('livewire.fooditem');
    }
    
    
    
}
