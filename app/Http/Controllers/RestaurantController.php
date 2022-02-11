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
       
        return view('admin.restaurant.create',compact('cities','cuisines'));
    }
    public function store(Request $request){
        $inputs=request()->validate([
            'name'=>'required|min:3|max:30',
            'about'=>'required',
            'address'=>'required',
            'mobile'=>'required',
            'city_id'=>'required',
            'location'=>'required',
            'logo'=>'required',
            'banner'=>'required',
            'min_order_value'=>'required',
            'cost_for_two_people'=>'required',
            'default_preparation_time'=>'required',
            'cuisine_id'=>'required',   
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

        // $rest = new Restaurant;
        // $rest->name = $inputs['name'];
        // $rest->about = $inputs['about'];
        // $rest->address = $inputs['address'];
        // $rest->mobile = $inputs['mobile'];
        // $rest->city_id = $inputs['city_id'];
        // $rest->location = $inputs['location'];
        // $rest->logo = $inputs['logo'];
        // $rest->banner = $inputs['banner'];
        // $rest->min_order_value = $inputs['value'];
        // $rest->cost_for_two_people = $inputs['cost'];
        // $rest->default_preparation_time = $inputs['time'];
        // $rest->cuisine_id = $inputs['cuisine'];
        // $rest->is_open=$inputs['is_open'];
        // $rest->allow_pickup=$inputs['allow_pickup'];
 
        // $rest->save();
        $restaurants=Restaurant:: create($inputs);
        if ($request->has('cuisine_id'))
        {
        $restaurants->cuisines()->attach($request->input('cuisine_id'));
        } 
        return redirect()->route('admin.restaurant.show');  
        }
        public function show(){
            $restaurant=Restaurant::all();
            
            return view('admin.restaurant.shows',['restaurants'=>$restaurant]);
        }
        public function edit(Restaurant $restaurant){
            $cities=City::all();
            $cuisines=Cuisine::all();
            
            return view('admin.restaurant.edit',['restaurants'=>$restaurant],compact('cities','cuisines'));

        }
        public function update(Restaurant $restaurant,Request $request){
            $inputs=request()->validate([
                'name'=>'required|min:3|max:30',
                'about'=>'required',
                'address'=>'required',
                'mobile'=>'required',
                'city_id'=>'required',
                'location'=>'required',
                'logo'=>['image', 'mimes:jpeg,png,jpg', 'max:2048'],
                'banner'=>['image', 'mimes:jpeg,png,jpg', 'max:2048'],
                'min_order_value'=>'required',
                'cost_for_two_people'=>'required',
                'default_preparation_time'=>'required',
                'cuisine'=>'required',
                'is_open'=>['sometimes', 'in:1,0'],
                'allow_pickup'=>['sometimes', 'in:1,0'],
                'status'=>'required'   
            ],[
                'name.required' => 'Name is required',
                'about.required' =>'About is required',
                'address.required'=>'Address is required',
                'mobile.required' =>'Mobile is required',
                'city_id.required' =>'City is required',
                'location.required' =>'Location is required',
                'logo.required' =>'Logo is required',
                'banner.required' =>'Banner is required',
                'min_order_value.required' =>'Value is required',
                'cost_for_two_people.required' =>'Cost is required',
                'default_preparation_time.required' =>'Time is required',
                'cuisine.required' =>'Cuisine is required',
                'is_open.required' =>'Is open is required',
                'allow_pickup.required' =>'Allow pickup is required',
               
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
            $restaurant->city_id = $inputs['city_id'];    
            
            if(request()->has('logo')) {

                $restaurant->logo= $inputs['logo'] = request()->file('logo')->store('images', 'public');
                 
             }
             if (request()->has('banner')) {
                
               $restaurant->banner= $inputs['banner'] = request()->file('banner')->store('images', 'public');
                
            }

            
            $restaurant->min_order_value = $inputs['min_order_value'];
            $restaurant->cost_for_two_people = $inputs['cost_for_two_people'];
            $restaurant->default_preparation_time = $inputs['default_preparation_time'];
            
            $restaurant->is_open=$inputs['is_open'];
            $restaurant->allow_pickup=$inputs['allow_pickup'];
            $restaurant->status=$inputs['status'];
            $restaurant->save();
        if ($request->has('cuisine'))
        {
        $restaurant->cuisines()->sync($request->input('cuisine'));
        } 
            return redirect()->route('admin.restaurant.show');  
        }
        public function view(Restaurant $restaurant){
            $cuisines=Cuisine::all();
           return view('admin.restaurant.view',['restaurant'=>$restaurant],compact('cuisines'));
        }
       
    }

