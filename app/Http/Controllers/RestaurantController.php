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
            'name'=>'required|min:3|max:30',
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
            'is_open'=>['sometimes', 'in:1,0'],
            'allow_pickup'=>['sometimes', 'in:1,0']     
        ]);
        
        if(request('logo')){
            $inputs['logo'] = request('logo')->store('images', 'public');
            }
               
        if(request('banner')){
            $inputs['banner'] = request('banner')->store('images', 'public');
            }
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
        $rest->is_open=$inputs['is_open'];
        $rest->allow_pickup=$inputs['allow_pickup'];
        
        
        
        $rest->save();
        return redirect()->route('restaurant.show');  

   
        }
        public function show(){
            $restaurant=Restaurant::all();
            
            return view('restaurant.shows',['restaurants'=>$restaurant]);
        }
        public function edit(Restaurant $restaurant){
            $cities=City::all();
            $cuisines=Cuisine::all();
            return view('restaurant.edit',['restaurants'=>$restaurant],compact('cities','cuisines'));

        }
        public function update(Restaurant $restaurant){
            $inputs=request()->validate([
                'name'=>'required|min:3|max:30',
                'about'=>'required',
                'address'=>'required',
                'mobile'=>'required',
                'city'=>'required',
                'location'=>'required',
                'logo'=>['image', 'mimes:jpeg,png,jpg', 'max:2048'],
                'banner'=>['image', 'mimes:jpeg,png,jpg', 'max:2048'],
                'value'=>'required',
                'cost'=>'required',
                'time'=>'required',
                'cuisine'=>'required',
                'is_open'=>['sometimes', 'in:1,0'],
                'allow_pickup'=>['sometimes', 'in:1,0'],
                'status'=>'required'   
            ],[
                'name.required' => 'Name is required',
                'about.required' =>'About is required',
                'address.required'=>'Address is required',
                'mobile.required' =>'Mobile is required',
                'city.required' =>'City is required',
                'location.required' =>'Location is required',
                'logo.required' =>'Logo is required',
                'banner.required' =>'Banner is required',
                'value.required' =>'Value is required',
                'cost.required' =>'Cost is required',
                'time.required' =>'Time is required',
                'cuisine.required' =>'Cuisine is required',
                'is_open.required' =>'Is open is required',
                'allow_pickup.required' =>'Allow pickup is required',
                'status.required' =>'Status is required',    
            ]); 
            
           
            
            
            
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
                
            $restaurant->name = $inputs['name'];
            $restaurant->about = $inputs['about'];
            $restaurant->address = $inputs['address'];
            $restaurant->mobile = $inputs['mobile'];
            $restaurant->city_id = $inputs['city'];    
            
            if(request()->has('logo')) {

                $restaurant->logo= $inputs['logo'] = request()->file('logo')->store('images', 'public');
                 
             }
             if (request()->has('banner')) {
                
               $restaurant->banner= $inputs['banner'] = request()->file('banner')->store('images', 'public');
                
            }

            
            $restaurant->min_order_value = $inputs['value'];
            $restaurant->cost_for_two_people = $inputs['cost'];
            $restaurant->default_preparation_time = $inputs['time'];
            $restaurant->cuisine_id = $inputs['cuisine']; 
            $restaurant->is_open=$inputs['is_open'];
            $restaurant->allow_pickup=$inputs['allow_pickup'];
            $restaurant->status=$inputs['status'];
            $restaurant->save();
            return redirect()->route('restaurant.show');  
        }
        public function view(Restaurant $restaurant){
           return view('restaurant.view',['restaurant'=>$restaurant]);
        }
       
    }

