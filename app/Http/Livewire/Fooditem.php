<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Itemfood;
use App\Models\Restaurant;

class Fooditem extends Component
{
    public $itemfoods;
    public $restaurant=[];
    public $cart;
    public $sum=[];
    
    
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
                "id"=>$itemfoods->id,
                "food_item" => $itemfoods->food_item,
                "quantity" => 1,
                "rate" => $itemfoods->rate,
                
            ];
        }
          
        session()->put('cart', $cart);
       
        
        $this->emit('increment');
        $this->emit('some-event');
    }
    
    public function removeFromCart($id){
        $itemfoods = Itemfood::findOrFail($id);
           
        $cart = session()->get('cart', []);
        $itemId=$cart[$id]['quantity'];
        if(isset($cart[$id]) && $cart[$id]['quantity'] > "1") {
            $cart[$id]['quantity']--;
        } 
        elseif($itemId== 1){
           
                unset($cart[$id]);
            }
        
        
        else {
            $cart[$id] = [
                "id"=>$itemfoods->id,
                "food_item" => $itemfoods->food_item,
                "quantity" => 1,
                "rate" => $itemfoods->rate,
            
                
            ];
        }
          
        session()->put('cart', $cart);
        $this->emit('decrement');
        $this->emit('some-event');
    }
     
    public function itemQuantity($id){
        $cart = session()->get('cart', []);
        if(isset($cart[$id]['quantity']))
        {
            $cartId=$cart[$id]['quantity'];
            return $cartId;
        }
        else{
            return 0;
        }
        
            
  
    }

    public function render()
    {
        return view('livewire.fooditem');
    }
    
    
    
}
