<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Address;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    //
    public function index(){
        return view('front.index');
    }
    public function signin(){
        return view('front.signin');
    }
    public function my_home(){
        return view('front.my_home');
    }
    public function signup(){
        return view('front.signup');
    }
    public function signup_store(Request $request){
        $request->validate([
            'first_name'=>'required|min:3|max:15',
            'last_name'=>'required|max:8',
            'mobile'=>'required|min:10|max:12',
            'email'=>'required|email',
            'password'=>'required|min:4',
        

        ]);
        $customer = new Customer;
        $customer->first_name = $request->first_name;

        $customer->last_name = $request->last_name;
        
        $customer->mobile = $request->mobile;
        
        $customer->email = $request->email;
        
        $customer->password = Hash::make($request->password);
        
        $save= $customer->save();
        return redirect('/signin');
            
        // if($save){

        //     return back()->with('success','new customer added successfully');
            
        //     }else{
            
        //     return back()->with('fail','something went wrong');
            
            
            
        //     }
            
            
            
        }
        
    
    // public function sign_in_fun(Request $request)
    // {
    //    $this->validate($request, [
    //    'email'   => 'required|email',
    //    'password'  => 'required|alphaNum|min:3'
    //  ]);

    //  $user_data = array(
    //   'email'  => $request->get('email'),
    //   'password' => $request->get('password')
    //  );

    //  if(Auth::attempt($user_data))
    //  {
    //   return redirect('/home');
    //  }
    //  else
    //  {
    //   return back()->with('error', 'Wrong Login Details');
    //  }

    // }

    public function check(Request $request)//signin 
{
    $request->validate([
        'email'=>'required|email',  
        'password'=>'required|min:4',
        ]);
        $userInfo = Customer::where('email','=', $request->email)->first();
        if(!$userInfo){
        return back()->with('fail','We do not recognize your email address');
        }else{
        //check password
        if(Hash::check($request->password, $userInfo->password)){
        $request->session()->put('LoggedUser', $userInfo->id);
        return redirect('/my_home');
        }else{
        return back()->with('fail','Incorrect password');
        }
        }
}

    public function forgotpassword(){
        return view('front.forgotpassword');
    }
    public function myaccount(){
        $data=['LoggedUserInfo'=>Customer::where('id','=',session('LoggedUser'))->first()];
        return view('front.components.my_account-master',$data);
        
    }


    public function profile_update(Request $request,$id){

       

        $customer=Customer::find($id);
        $customer->first_name=$request->first_name;
        $customer->last_name=$request->last_name;
        $customer->mobile=$request->mobile;
        $customer->email=$request->email;
        $save=$customer->save();
        if($save){
            return back()->with('success','Account Details Updated Successfully.');  
        }
        else{
            return back()->with('fail','Something went wrong');  

        }
        

    }
    public function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/front');
        }
    }
    public function account(){
        $data=['LoggedUserInfo'=>Customer::where('id','=',session('LoggedUser'))->first()];
        return view('my_account',$data);
    }
    public function show_password(){
        return view('front.change_password');
    }
    public function change_password(Request $request) {  
        
            $request->validate([
              'current_password' => 'required',
              'password' => 'required|string|min:6|',
              'confirm_password' => 'required',
            ]);
    
            $customer = auth('api')::customer();
            // dd($customer);
            if (!Hash::check($request->current_password, $customer->password)) {
                return back()->with('error', 'Current password does not match!');
            }
    
            $customer->password = Hash::make($request->password);
            $customer->save();
    
            return back()->with('success', 'Password successfully changed!');
        }
        public function address(){
            return view('front.address');
        }
        public function address_store(){
            $inputs=request()->validate([
                'location'=>'required',
                'house_name'=>'required',
                'area'=>'required',
                'city'=>'required',
                'landmark'=>'required',
                'pincode'=>'required',
                'home'=>'required',
                'note_a_driver'=>'required',
            
            ],[
                'location.required' => 'Location is required',
                'house_name.required' =>'House Name is required',
                'area.required' =>'Area is required',
                'city.required' =>'City is required',
                'landmark.required' =>'Landmark is required',
                'pincode.required' =>'Pincode is required',
                'home.required' =>'Home is required',
                'note_a_driver.required' =>'Note for Driver is required',

            ]);
            $address = new Address;
            $address->location=$inputs['location'];
            $address->house_name=$inputs['house_name'];
            $address->area=$inputs['area'];
            $address->city=$inputs['city'];
            $address->landmark=$inputs['landmark'];
            $address->pincode=$inputs['pincode'];
            $address->home=$inputs['home'];
            $address->note_a_driver=$inputs['note_a_driver'];
            $address->save();
            return back();
            
        }
}

