<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Address;
use App\Models\Restaurant;
use App\Models\Cuisine;
use App\Models\Itemfood;
use App\Models\Order;

use App\Rules\MatchOldPassword;
use Session;

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
        return redirect('/customer/signin');
            
    }
    public function check(Request $request)//signin 
{
    $request->validate([
        'email'=>'required|email',  
        'password'=>'required|min:4',
        ]);

        $userInfo=$request->only('email','password');
        if(Auth::guard('customer')->attempt($userInfo)){
            return redirect('/customer/my_home');
        }else{
            return back()->with('fail','We do not recognize your email address');
        }
        // $userInfo = Customer::where('email','=', $request->email)->first();
        // if(!$userInfo){
        // return back()->with('fail','We do not recognize your email address');
        // }else{
        // //check password
        // if(Hash::check($request->password, $userInfo->password)){
        // $request->session()->put('LoggedUser', $userInfo->id);
        // return redirect('customer/my_home');
        // }else{
        // return back()->with('fail','Incorrect password');
        // }
        // }
}
////////////////Logout//////////////////////////
public function logout(Request $request){
    Auth::guard('customer')->logout();
    $request->session()->forget('cart');
    $request->session()->forget('store');
    $request->session()->forget('cartsession');

    return redirect('/front');
   
}
// public function logout(){
//     if(session()->has('LoggedUser')){
//         session()->pull('LoggedUser');
//         return redirect('/front');
//     }
// }

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
        $action_link=route('customer.showresetForm',['token'=>$token,'email'=>$request->email]);
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
            return redirect()->route('customer.signin')->with('info','password changed')->with('verifiedemail',$request->email);
        }
    }
    
    ////////////////////
   
    public function myaccount(Customer $customer){
        $customer=Auth::user();
        return view('front.components.my_account-master',['customer'=>$customer]);
        
    }

    public function profile_update(Request $request,$id){
        $customer=Customer::findorFail($id);
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
   
    public function account(Customer $customer){
        $customer=Auth::user();
        return view('front.my_account',['customer'=>$customer]);
    }
    ///////////Change Password///////////////
    public function show_password(){
        return view('front.change_password');
    }
    public function change_password(Request $request) {  
        
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        Customer::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
        return back();
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
       
       
        // public function edit_address(Address $address,$id){
        //     $address=Address::find($id);
            
        //     // return response()->json([
        //     //     'status'=>200,
        //     //     'address'=>$address,
        //     // ]);
        //     // return back();
        //     // dd($address);
        //     return view('front.address',['address'=>$address]);
    
        // }
        // public function update_address(Address $add){
        //     $inputs=request()->validate([
        //         'location'=>'required',
        //         'house_name'=>'required',
        //         'area'=>'required',
        //         'city'=>'required',
        //         'landmark'=>'required',
        //         'pincode'=>'required',
        //         'home'=>'required',
        //         'note_a_driver'=>'required',
            
        //     ],[
        //         'location.required' => 'Location is required',
        //         'house_name.required' =>'House Name is required',
        //         'area.required' =>'Area is required',
        //         'city.required' =>'City is required',
        //         'landmark.required' =>'Landmark is required',
        //         'pincode.required' =>'Pincode is required',
        //         'home.required' =>'Address Type is required',
        //         'note_a_driver.required' =>'Note for Driver is required',

        //     ]);
        //     $add->location=$inputs['location'];
        //     $add->house_name=$inputs['house_name'];
        //     $add->area=$inputs['area'];
        //     $add->city=$inputs['city'];
        //     $add->landmark=$inputs['landmark'];
        //     $add->pincode=$inputs['pincode'];
        //     $add->home=$inputs['home'];
        //     $add->note_a_driver=$inputs['note_a_driver'];
        //     $add->save();
            
        //     return back();
        // }
        public function edit_address($id){
            $address=Address::find($id);
            
            return view('front.address',compact('address'));
    
        }
        public function update_address(Request $request, $id){
            $address = Address::find($id);
            $address->location = $request->input('location');
            $address->house_name = $request->input('house_name');
            $address->area = $request->input('area');
            $address->city = $request->input('city');
            $address->landmark = $request->input('landmark');
            $address->pincode = $request->input('pincode');
            $address->home = $request->input('home');
            $address->note_a_driver = $request->input('note_a_driver');

            $address->update();
            return back();
        }

        public function address_destroy($id){
            $address=Address::find($id);
            $address->delete();
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
        $cartsession = session()->get('cartsession', []);

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
        if(isset($cartsession[$id])) {
            $cartsession[$id]['quantity']++;
        } else {
            $cartsession[$id] = [
                "id"=>$itemfoods->id,
                "food_item" => $itemfoods->food_item,
                "quantity" => 1,
                "rate" => $itemfoods->rate,
                
                
               
                
            ];
        }
        
        session()->put('cartsession', $cartsession);
        dd($cartsession);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
        

    }
    public function removeFromCart($id){
        $itemfoods = Itemfood::findOrFail($id);
           
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
        if(isset($cartsession[$id]) && $cartsession[$id]['quantity'] > "1") {
            $cartsession[$id]['quantity']--;
        } 
        elseif($itemId== 1){
           
                unset($cartsession[$id]);
            }
        
        
        else {
            $cartsession[$id] = [
                "id"=>$itemfoods->id,
                "food_item" => $itemfoods->food_item,
                "quantity" => 1,
                "rate" => $itemfoods->rate,
            
                
            ];
        }
        session()->put('cartsession', $cartsession);
        return redirect()->back()->with('success', 'Product added to cart successfully!');

    }
    public function cartDelete(Request $request,$id)
    {
        
            $cart = session()->get('cart');
            
            unset($cart[$id]);
            session()->put('cart', $cart);
           
            session()->flash('success', 'Product removed successfully');
        
    }
    public function cart2(){

       
            return view('front.cart2');
            
        

    }
    public function emptycart(){
        return view('front.emptycart');
    }
    public function restaurant_details($id,Request $request)

    {
    $itemfoods=Itemfood::all();
    $cuisines=Cuisine::all();
    $restaurant=Restaurant::find($id);
    $rest=session()->get('rest',[]);
   
    if(isset($rest[$id])) {
        unset($rest[$id]);
    } else {
        $rest[$id]=[
            "id"=>$restaurant->id,
            "name"=>$restaurant->name,
            "location"=>$restaurant->location,
            "address"=>$restaurant->address,
            "mobile"=>$restaurant->mobile,
        ];
            
        
    }
    
       
        session()->put('rest',$rest);
       
        
        
    return view('front.restaurant_details', ['restaurant'=>$restaurant], compact('cuisines','itemfoods'));

    }

    public function checkout(Restaurant $restaurant,Request $request){
        $rest=session()->get('rest',[]);
        $cartsession=session()->get('cartsession',[]);

        $address=Address::all();
        $itemfoods=Itemfood::all();
        $restaurant=Restaurant::all();
        
        // session()->put('rest',$rest);
       
        
        return view('front.checkout',compact('itemfoods','address'));
    }
     public function order(orderStore $order,$id){
        $order=Order::findOrFail($id);
        
         return view('front.order',['order'=>$order]);
     }
     public function order_tracking(Order $order,Request $request){
         
         $store=session()->get('store',[]);
        
        //  $cart=session()->get('cart',[]);
        
        //  if(session('cart')){
        //      unset($cart[$id]);
        //  }
        //  dd($cart);
        
        $cartsession=session()->get('cartsession');
        $request->session()->forget('cart');
        $order=Order::all();

         return view('front.order_tracking',['order'=>$order]);
         
        // $request->session()->forget('cart');
        // $request->session()->forget('store');

        // return redirect('/customer/my_home');
        
     }

     public function addressStore($id)
     {
         $address = Address::findOrFail($id);
            
         $store = session()->get('store', []);
        
         if(isset($store[$id])) {     
            unset($store[$id]);
        } else {
         
             $store[$id] = [
                 "id" => $address->id,
                 "location" => $address->location, 
                 "home"=>$address->home,
                 "house_name"=>$address->house_name,
                 "area"=>$address->area,
                 "pincode"=>$address->pincode,
                 "city"=>$address->city,
             ];
            
        }
       
         session()->put('store', $store);
         
        
            
         return redirect()->back()->with('success', 'Address selected successfully!');
     }

     public function orderStore(Order $order,Request $request){
       
        $store = session()->get('store', []);
        
        $cart = session()->get('cart', []);
        // $restaurant=session()->get('restaurant',[]);
        $rest=session()->get('rest',[]);
        
       
        
        $inputs=request()->validate([
            'delivery_method'=>'required',]);

        $address_id= 0;
        foreach($store as $storeaddress){
            $address_id=$storeaddress['id'];

        }    
        $restaurant_id=null;
        foreach($rest as $restaurant){
            $restaurant_id=$restaurant['id'];
        }

        
        
        $total=0;
        
            
        foreach($cart as $cartitems){
                $total +=($cartitems['rate'] * $cartitems['quantity']);       
        }
        // if($address_id==0){
        //     if('delivery_method'=='pickup'){
        //         return redirect()->back();

        //     }
               
            
            
        // }
        
        $customer=Auth::user()->id;
       $customer1=Auth::user()->mobile;
        $order->order_date=Carbon::now();
        $order->mobile=$customer1;
        $order->item_total=$total;
        $order->sub_total=$total;
        $order->grand_total=$total;
        $order->address_id=$address_id;
        $order->order_type=$inputs['delivery_method'];
        $order->order_status='pending';
        $order->payment_status='pending';
        $order->payment_method='cash on delivery';
        $order->customer_id=$customer;
        $order->restaurant_id=$restaurant_id;
        
        // dd($cid);
        // dd($quantity);
        $order->save();
        
        $cartid=array();
        foreach($cart as $cartItem){
            array_push($cartid,$cartItem);
            $cid=$cartItem['id'];
            $quantity=$cartItem['quantity'];
            $name=$cartItem['food_item'];
            $order->itemfoods()->attach($cid,['quantity'=>$quantity,'food_item'=>$name]);
            
        }    
       
        return view('front.order');
        

     }
     public function order_history(Order $order){
         $order=Order::all();
         $itemfoods=Itemfood::all();
         return view('front.orderhistory',['order'=>$order],compact('itemfoods'));
     }

     


               
            
}

