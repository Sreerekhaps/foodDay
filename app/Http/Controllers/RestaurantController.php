<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\City;
use App\Models\Cuisine;





class RestaurantController extends Controller
{
    //
    
    public function create(){
        $cities=City::all();
        $cuisines=Cuisine::all();
        return view('restaurant.create',compact('cities','cuisines'));
    }
    public function store(){
        $inputs=request()->validate([
            'name'=>'required|min:3|max:10',
            'about'=>'required',
            'address'=>'required',
            'mobile'=>'required',
            'city'=>'required',
            'location'=>'required',
            'logo'=>'required',
            'banner'=>'required',
            'value'=>'required',
            'cost'=>'required',
            'time'=>'required',
            'cuisine'=>'required',
            'is_open',
            'allow_pickup'
            
        ]);
        
        
        if(request('logo')){
            $inputs['logo']=request('logo')->store('images');
        }
        if(request('banner')){
            $inputs['banner']=request('banner')->store('images');
        }
        $rest = new Restaurant;
        $rest->name = $inputs['name'];
        $rest->about = $inputs['about'];
        $rest->address = $inputs['address'];
        $rest->mobile = $inputs['mobile'];
        $rest->city_id = $inputs['city'];
        $rest->location = $inputs['location'];
        $rest->logo = $inputs['logo'];
        $rest->banner = $inputs['banner'];
        $rest->min_order_value = $inputs['value'];
        $rest->cost_for_two_people = $inputs['cost'];
        $rest->default_preparation_time = $inputs['time'];
        $rest->cuisine_id = $inputs['cuisine'];
        $rest->is_open;
        $rest->allow_pickup;
        if (request()->has('is_open')) {
            $inputs['is_open'] = 1;
            } else {
            $inputs['is_open'] = 0;
            }
        if (request()->has('allow_pickup')) {
            $inputs['allow_pickup'] = 1;
            } else {
            $inputs['allow_pickup'] = 0;
            }    
        $rest->save();
        return redirect()->route('restaurant.show');  

   
        }
        public function show(){
            $restaurant=Restaurant::all();
            $cities=City::all();
            return view('restaurant.shows',['restaurants'=>$restaurant]);
        }
        public function edit(Restaurant $restaurant){
            $cities=City::all();
            $cuisines=Cuisine::all();
            return view('restaurant.edit',['restaurants'=>$restaurant],compact('cities','cuisines'));

        }
        public function update(Restaurant $restaurant){
            $inputs=request()->validate([
                'name'=>'required|min:3|max:10',
                'about'=>'required',
                'address'=>'required',
                'mobile'=>'required',
                'city'=>'required',
                'location'=>'required',
                'value'=>'required',
                'cost'=>'required',
                'time'=>'required',
                'cuisine'=>'required'
            ]);    

            $restaurant->name = $inputs['name'];
            $restaurant->about = $inputs['about'];
            $restaurant->address = $inputs['address'];
            $restaurant->mobile = $inputs['mobile'];
            $restaurant->city_id = $inputs['city'];    
            $restaurant->location = $inputs['location'];
            $restaurant->min_order_value = $inputs['value'];
            $restaurant->cost_for_two_people = $inputs['cost'];
            $restaurant->default_preparation_time = $inputs['time'];
            $restaurant->cuisine_id = $inputs['cuisine']; 
            $restaurant->save();
            return redirect()->route('restaurant.show');  
        }
        public function view(Restaurant $restaurant){
           return view('restaurant.view',['restaurant'=>$restaurant]);
        }
    }