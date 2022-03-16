<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Address;
use App\Models\Restaurant;
use App\Models\Cuisine;
use App\Models\Itemfood;


use Carbon\Carbon;

// use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Hash;
use Auth;
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
        return redirect('/signin');
            
    }
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
////////////////Logout//////////////////////////
public function logout(){
    if(session()->has('LoggedUser')){
        session()->pull('LoggedUser');
        return redirect('/front');
    }
}

////////////////Forgot Password//////////////////
    public function showforgotForm(){
        return view('front.forgotpassword');
    }

    public function sendresetLink(Request $request){
        $request->validate([
         'email'=>'required|email|exists:customers,email'
        ]);
        $token=\Str::random(64);
        \DB::table('password_resets')->insert([
            'email'=>$request->email,
            'token'=>$token,
            'created_at'=>Carbon::now(),
        ]);
        $action_link=route('showresetForm',['token'=>$token,'email'=>$request->email]);
        $body="we are recieved the reset main for account associated with ".$request->email.".you can reset 
        the password by clicking the below link";
        \Mail::send('email_forgot',['action_link'=>$action_link,'body'=>$body],function($message) use ($request){
            $message->from('sreerekhaps222@gmail.com','Name');
            $message->to($request->email,'name')->subject('Reset Password');
        });
        return back()->with('success','we have emailed your reset password link');
    }
    public function showresetForm(Request $request, $token=null){
        return view('front.reset_password')->with(['token'=>$token,'email'=>$request->email]);
    }
    public function resetPassword(Request $request){
        $request->validate([
            'email'=>'required|email|exists:customers,email',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required',
        ]);
        $check_token=DB::table('password_resets')->where([
            'email'=>$request->email,
            'token'=>$request->token,
        ])->first();
        
        if(!$check_token){
            return back()->withInput()->with('fail','Invalid token');

        }
        else{
            Customer::where('email',$request->email)->update([
                'password'=>\Hash::make($request->password)
            ]);
            \DB::table('password_resets')->where([
                'email'=>$request->email
            ])->delete();
            return redirect()->route('signin')->with('info','password changed')->with('verifiedemail',$request->email);
        }
    }
    
    ////////////////////
   
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
   
    public function account(){
        $data=['LoggedUserInfo'=>Customer::where('id','=',session('LoggedUser'))->first()];
        return view('my_account',$data);
    }
    ///////////Change Password///////////////
    public function show_password(){
        return view('front.change_password');
    }
    public function change_password(Request $request) {  
        
            $request->validate([
              'current_password' => 'required',
              'password' => 'required|string|min:6|',
              'confirm_password' => 'required',
            ]);
    
            $customer = Auth::customer();
            dd($customer);
            if (!Hash::check($request->current_password, $customer->password)) {
                return back()->with('error', 'Current password does not match!');
            }
            else{

                $customer->password = Hash::make($request->password);
                $customer->save();
        
                return back()->with('success', 'Password successfully changed!');
            }
    
        }
        /////////////Address///////////////////
        public function address(Address $address){
            $address=Address::all();
            return view('front.address',['address'=>$address]);
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
                'home.required' =>'Address Type is required',
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
       
        public function edit_address($id){
            $address=Address::find($id);
            
            return response()->json([
                'status'=>200,
                'address'=>$address,
            ]);
    
        }
        public function address_destroy($id){
            $address=Address::find($id);
            $address->delete();
            return back();
        }

        public function update_address(Address $add){
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
                'home.required' =>'Address Type is required',
                'note_a_driver.required' =>'Note for Driver is required',

            ]);
            $add->location=$inputs['location'];
            $add->house_name=$inputs['house_name'];
            $add->area=$inputs['area'];
            $add->city=$inputs['city'];
            $add->landmark=$inputs['landmark'];
            $add->pincode=$inputs['pincode'];
            $add->home=$inputs['home'];
            $add->note_a_driver=$inputs['note_a_driver'];
            $add->save();
            return back();
        }



        ////////////////Search/////////////
        public function my_home(Request $request){
            
            return view('my_home');
        }
        
        public function restaurant_listing(Restaurant $restaurant){
            $restaurant=Restaurant::all();
            $cuisines=Cuisine::all();
            return view('front.restaurant_listing',['restaurants'=>$restaurant],compact('cuisines'));
        }
        public function search(Request $request){
           
            $search_text=$request->location;
            $rest=Restaurant::where('location','LIKE','%'.$search_text.'%')->get();
            $cuisines=Cuisine::all();
            return view('front.restaurant_listing',['restaurants'=>$rest],compact('cuisines'));
        }


       
        // public function restaurant_items(Restaurant $restaurant){
        //     $itemfoods=Itemfood::all();
        //     $cuisines=Cuisine::all();
        // return view('front.restaurant_details',['restaurant'=>$restaurant], compact('cuisines','itemfoods'));

        // }
     //////////////Add to Cart///////////////
     public function cart()
    {
       

            return view('front.cart');

        
        
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
        return redirect()->back()->with('success', 'Product added to cart successfully!');
        

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
        return redirect()->back()->with('success', 'Product added to cart successfully!');

    }
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
    public function cart2(){

       
            return view('front.cart2');
            
        

    }
    public function emptycart(){
        return view('front.emptycart');
    }
    public function restaurant_details(Restaurant $restaurant )

    {
    $itemfoods=Itemfood::all();
    $cuisines=Cuisine::all();

    return view('front.restaurant_details', ['restaurant'=>$restaurant], compact('cuisines','itemfoods'));

    }

    public function checkout(){
        $address=Address::all();
        $itemfoods=Itemfood::all();
        $restaurant=Restaurant::all();
        return view('front.checkout',['restaurants'=>$restaurant],compact('itemfoods','address'));
    }
     public function order(){
         return view('front.order');
     }
     public function order_tracking(){
         return view('front.order_tracking');
     }
                
            
}

