<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use App\Models\Driver;
use App\Models\Restaurant_user;
use App\Models\Restaurant;


class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.index');
    }
   
    
    public function create(){
        return view('admin.create');
    }
    public function store(){
        $inputs=request()->validate([
            'first_name'=>'required|min:3|max:15',
            'last_name'=>'required|max:8',
            'phone_code'=>'required|max:5',
            'mobile'=>'required|min:10|max:12',
            'email'=>'required|email',
            'password'=>'required|min:4',
        
        ],[
            'first_name.required' => 'First Name is required',
            'last_name.required' =>'Last Name is required',
            'phone_code.required'=>'Phone code is required',
            'mobile.required' =>'Mobile is required',
            'email.required' =>'Email is required',
            'password.required' =>'Password is required',
    
        ]);
        $user = new User;
        $user->first_name=$inputs['first_name'];
        $user->last_name=$inputs['last_name'];
        $user->phone_code=$inputs['phone_code'];
        $user->mobile=$inputs['mobile'];
        $user->email=$inputs['email'];
        $user->password=$inputs['password'];
        $user->save();
        return redirect()->route('admin.show');
        
    }
    public function show(){
        $user=User::all();
        return view('admin.shows',['users'=>$user]);
    }
    public function edit(User $user){
        return view('admin.edit',['users'=>$user]);

    }
    public function update(User $user){
        $inputs=request()->validate([
            'first_name'=>'required|min:3|max:10',
            'last_name'=>'required|max:8',
            'phone_code'=>'required|max:5',
            'mobile'=>'required|min:10|max:12',
            'email'=>'required|email',
            'password'=>'required|min:4',

        ],[
            'first_name.required' => 'First Name is required',
            'last_name.required' =>'Last Name is required',
            'phone_code.required'=>'Phone code is required',
            'mobile.required' =>'Mobile is required',
            'email.required' =>'Email is required',
            'password.required' =>'Password is required',    
        ]);
        $user->first_name=$inputs['first_name'];
        $user->last_name=$inputs['last_name'];
        $user->phone_code=$inputs['phone_code'];
        $user->mobile=$inputs['mobile'];
        $user->email=$inputs['email'];
        $user->password=$inputs['password'];
        $user->save();
        return redirect()->route('admin.show');  

    }
    public function view(User $user){
    return view('admin.view',['users'=>$user]);
    }

/////////////////////////////////////////////////////////////////////
        public function customer_create(){
            return view('admin.customer.create');
        }
        public function customer_store(){
            $inputs=request()->validate([
                'first_name'=>'required|min:3|max:15',
                'last_name'=>'required|max:8',
                'mobile'=>'required|min:10|max:12',
                'email'=>'required|email',
                'password'=>'required|min:4',
            
            ],[
                'first_name.required' => 'First Name is required',
                'last_name.required' =>'Last Name is required',
                'mobile.required' =>'Mobile is required',
                'email.required' =>'Email is required',
                'password.required' =>'Password is required',

            ]);
            $customer = new Customer;
            $customer->first_name=$inputs['first_name'];
            $customer->last_name=$inputs['last_name'];
            $customer->mobile=$inputs['mobile'];
            $customer->email=$inputs['email'];
            $customer->password=$inputs['password'];
            $customer->save();
            return redirect()->route('admin.customer.show');
            
        }
        public function customer_show(){
            $customer=Customer::all();
            return view('admin.customer.shows',['customers'=>$customer]);
        }
        public function customer_edit(Customer $customer){
            return view('admin.customer.edit',['customers'=>$customer]);
    
        }
        public function customer_update(Customer $customer){
            $inputs=request()->validate([
                'first_name'=>'required|min:3|max:10',
                'last_name'=>'required|max:8',
                'mobile'=>'required|min:10|max:12',
                'email'=>'required|email',
                'password'=>'required|min:4',
    
            ],[
                'first_name.required' => 'First Name is required',
                'last_name.required' =>'Last Name is required',
                
                'mobile.required' =>'Mobile is required',
                'email.required' =>'Email is required',
                'password.required' =>'Password is required',    
            ]);
            $customer->first_name=$inputs['first_name'];
            $customer->last_name=$inputs['last_name'];
           
            $customer->mobile=$inputs['mobile'];
            $customer->email=$inputs['email'];
            $customer->password=$inputs['password'];
            $customer->save();
            return redirect()->route('admin.customer.show');  
    
        }
        public function customer_view(Customer $customer){
        return view('admin.customer.view',['customers'=>$customer]);
        }
    /////////////////////////////////////////////////////////////////////
    public function restaurant_user_create(){
        return view('admin.restaurant_user.create');
    }
    public function restaurant_user_store(){
        $inputs=request()->validate([
            'first_name'=>'required|min:3|max:15',
            'last_name'=>'required|max:8',
            'mobile'=>'required|min:10|max:12',
            'email'=>'required|email',
            'password'=>'required|min:4',
        
        ],[
            'first_name.required' => 'First Name is required',
            'last_name.required' =>'Last Name is required',
            'mobile.required' =>'Mobile is required',
            'email.required' =>'Email is required',
            'password.required' =>'Password is required',

        ]);
        $restaurant_user = new Restaurant_user;
        $restaurant_user->first_name=$inputs['first_name'];
        $restaurant_user->last_name=$inputs['last_name'];
        $restaurant_user->mobile=$inputs['mobile'];
        $restaurant_user->email=$inputs['email'];
        $restaurant_user->password=$inputs['password'];
        $restaurant_user->save();
        return redirect()->route('admin.restaurant_user.show');
        
    }
    public function restaurant_user_show(){
        $restaurant_user=Restaurant_user::all();
        return view('admin.restaurant_user.shows',['restaurant_users'=>$restaurant_user]);
    }
    public function restaurant_user_edit(Restaurant_user $restaurant_user){
        return view('admin.restaurant_user.edit',['restaurant_users'=>$restaurant_user]);

    }
    public function restaurant_user_update(Restaurant_user $restaurant_user){
        $inputs=request()->validate([
            'first_name'=>'required|min:3|max:10',
            'last_name'=>'required|max:8',
            'mobile'=>'required|min:10|max:12',
            'email'=>'required|email',
            'password'=>'required|min:4',

        ],[
            'first_name.required' => 'First Name is required',
            'last_name.required' =>'Last Name is required',
            
            'mobile.required' =>'Mobile is required',
            'email.required' =>'Email is required',
            'password.required' =>'Password is required',    
        ]);
        $restaurant_user->first_name=$inputs['first_name'];
        $restaurant_user->last_name=$inputs['last_name'];
       
        $restaurant_user->mobile=$inputs['mobile'];
        $restaurant_user->email=$inputs['email'];
        $restaurant_user->password=$inputs['password'];
        $restaurant_user->save();
        return redirect()->route('admin.restaurant_user.show');  

    }
    public function restaurant_user_view(Restaurant_user $restaurant_user){
    return view('admin.restaurant_user.view',['restaurant_users'=>$restaurant_user]);
    }

    /////////////////////////////////////////////////////////////////////
    public function driver_create(){
        return view('admin.driver.create');
    }
    public function driver_store(){
        $inputs=request()->validate([
            'first_name'=>'required|min:3|max:15',
            'last_name'=>'required|max:8',
            'mobile'=>'required|min:10|max:12',
            'email'=>'required|email',
            'password'=>'required|min:4',
        
        ],[
            'first_name.required' => 'First Name is required',
            'last_name.required' =>'Last Name is required',
            'mobile.required' =>'Mobile is required',
            'email.required' =>'Email is required',
            'password.required' =>'Password is required',

        ]);
        $driver = new Driver;
        $driver->first_name=$inputs['first_name'];
        $driver->last_name=$inputs['last_name'];
        $driver->mobile=$inputs['mobile'];
        $driver->email=$inputs['email'];
        $driver->password=$inputs['password'];
        $driver->save();
        return redirect()->route('admin.driver.show');
        
    }
    public function driver_show(){
        $driver=Driver::all();
        return view('admin.driver.shows',['drivers'=>$driver]);
    }
    public function driver_edit(Driver $driver){
        return view('admin.driver.edit',['drivers'=>$driver]);

    }
    public function driver_update(Driver $driver){
        $inputs=request()->validate([
            'first_name'=>'required|min:3|max:10',
            'last_name'=>'required|max:8',
            'mobile'=>'required|min:10|max:12',
            'email'=>'required|email',
            'password'=>'required|min:4',

        ],[
            'first_name.required' => 'First Name is required',
            'last_name.required' =>'Last Name is required',
            
            'mobile.required' =>'Mobile is required',
            'email.required' =>'Email is required',
            'password.required' =>'Password is required',    
        ]);
        $driver->first_name=$inputs['first_name'];
        $driver->last_name=$inputs['last_name'];
       
        $driver->mobile=$inputs['mobile'];
        $driver->email=$inputs['email'];
        $driver->password=$inputs['password'];
        $driver->save();
        return redirect()->route('admin.driver.show');  

    }
    public function driver_view(Driver $driver){
    return view('admin.driver.view',['drivers'=>$driver]);
    }


}
