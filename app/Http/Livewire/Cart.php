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
    public function addItemToCart($id)
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
        $ss=$cart[$id]['quantity'];
        
        $this->emit('increment');
    }
    
    public function removeItemFromCart($id){
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
    }
    public function checkout()
    {
        return redirect()->to('/customer/checkout');
    }


    public function render()
    {
        
        return view('livewire.cart');
    }
}
