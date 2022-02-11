<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
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

            
        if($save){

            return back()->with('success','new customer added successfully');
            
            }else{
            
            return back()->with('fail','something went wrong');
            
            
            
            }
            
            
            
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

    public function check(Request $request)
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
        return redirect('/myaccount');
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


    public function profile_update(Customer $customer){
        $data=['LoggedUserInfo'=>Customer::where('id','=',session('LoggedUser'))->first()];

        $inputs=request()->validate([
            'first_name'=>'required|min:3|max:15',
            'last_name'=>'required|max:8',
            'mobile'=>'required|min:10|max:12',
            'email'=>'required|email',
            'password'=>'required|min:4',
        

        ]);

       
        $customer->first_name=$inputs['first_name'];
        $customer->last_name=$inputs['last_name'];
        $customer->mobile=$inputs['mobile'];
        $customer->email=$inputs['email'];
        $customer->password=$inputs['password'];
        $customer->save();
        
        return back();  

    }
}
