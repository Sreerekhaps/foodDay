<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Address;
use App\Models\Restaurant;
use App\Models\Cuisine;

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
//////////////////////////////////
    public function showforgotForm(){
        return view('front.forgotpassword');
    }

    public function sendresetLink(Request $request){
        $request->validate([
         'email'=>'required|email|exists:customers,email'
        ]);
    }
    ////////////////////
    // public function forgotpasswordstore(Request $request) {
    //     $request->validate([
    //         'email' => 'required|email|exists:customers',
    //     ]);

    //     $token = Str::random(64);
    //     DB::table('password_resets')->insert([
    //         'email' => $request->email,
    //         'token' => $token,
    //         'created_at' => Carbon::now()
    //     ]);

    //     Mail::send('front.forgotpassword-email', ['token' => $token], function($message) use($request){
    //         $message->to($request->email);
    //         $message->from(env('MAIL_FROM_ADDRESS'), env('APP_NAME'));
    //         $message->subject('Reset Password');
    //     });

    //     return back()->with('message', 'We have emailed your password reset link!');
    // }

    //////////////////
    // public function ResetPassword($token) {
    //     return view('front.reset_password', ['token' => $token]);
    // }
    // ///////////////////
    // public function ResetPasswordStore(Request $request) {
    //     $request->validate([
            
    //         'new_password' => 'required|string|min:8|confirmed',
    //         'confirm_password' => 'required'
    //     ]);

    //     $update = DB::table('password_resets')->where(['token' => $request->token])->first();

    //     if(!$update){
    //         return back()->withInput()->with('error', 'Invalid token!');
    //     }

    //     $customer = Customer::where('email', $request->email)->update(['password' => Hash::make($request->password)]);

    //     // Delete password_resets record
    //     DB::table('password_resets')->where(['email'=> $request->email])->delete();

    //     return redirect('/login')->with('message', 'Your password has been successfully changed!');
    // }
    ///////////////////
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
    
            $customer = Auth::customer();
            // dd($customer);
            if (!Hash::check($request->current_password, $customer->password)) {
                return back()->with('error', 'Current password does not match!');
            }
            else{

                $customer->password = Hash::make($request->password);
                $customer->save();
        
                return back()->with('success', 'Password successfully changed!');
            }
    
        }
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
        // public function edit_address(){
        //     return view('front.edit_address');
        // }
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



        /////////////////////////////
        public function my_home(Request $request){
            // $restaurant=Restaurant::all();
            // $restaurant = Restaurant::when(
            //     $request->input('location'),
            //     function ($query) use ($request)
            //     {
            //     $query->where('location', 'like', '%'.$request->input('location').'%');
                     
            //     }
            //     ) ->orderBy('created_at', 'desc')->paginate(5);
            
            //     $request->flash();
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


        public function restaurant_details(Restaurant $restaurant )

{

$cuisines=Cuisine::all();

return view('front.restaurant_details', ['restaurant'=>$restaurant], compact('cuisines'));

}
      
        // public function search_restaurant(){
        
        
        // $search_text=$_GET['location'];
        //     $rest=Restaurant::where('location','%'.$search_text.'%')->get();

        //     return view('front.search_restaurant');
        // }
        ///////////////
        // $rest=Restaurant::all();
        // $rest = Restaurant::when(
        // $request->input('location'),
        // function ($query) use ($request)
        // {
        // $query->where('location', 'like', '%'.$request->input('location').'%');
             
        // }
        // ) ->orderBy('created_at', 'desc')->paginate(5);
    
        // $request->flash();
        ////////////////////////////
       
}

