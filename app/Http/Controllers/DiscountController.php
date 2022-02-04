<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discount;
use App\Models\Restaurant;


class DiscountController extends Controller
{
    //
    public function create(){
        $restaurants=Restaurant::all();
        return view('discount.create',compact('restaurants'));
    }
    public function store(Request $request){
        $inputs=request()->validate([
            'name'=>'required|min:3|max:10',
            'code'=>'required',
            'discount_type'=>'required',
            'amount'=>'required',
            'min_percentage_amount'=>'required',
            'start_at'=>'required',
            'end_at'=>'required',
            'max_uses'=>'required',
            'max_uses_per_customer'=>'required',
            'restaurant_id'=>'required',
        ],[
            'name.required' => 'Name is required',
            'code.required' =>'Code is required',
            'discount_type.required'=>'Discount type is required',
            'amount.required' =>'Amount is required',
            'min_percentage_amount.required' =>'Minimum percentage amount is required',
            'start_at.required' =>'Start date is required',
            'end_at.required' =>'End date is required',
            'max_uses.required' =>'Maximum uses is required',
            'max_uses_per_customer.required' =>'Maximum uses per customer is required',
            'restaurant_id.required' =>'Resturant is required',

        ]);
        // $discount=new Discount;
        // $discount->name=$inputs['name'];
        // $discount->code=$inputs['code'];
        // $discount->discount_type=$inputs['discount_type'];
        // $discount->amount=$inputs['amount'];
        // $discount->min_percentage_amount=$inputs['min'];
        // $discount->start_at=$inputs['date'];
        // $discount->end_at=$inputs['edate'];
        // $discount->max_uses=$inputs['uses'];
        // $discount->max_uses_per_customer=$inputs['cuses'];
        // $discount->restaurant_id=$inputs['restaurant'];
        
        // $discount->save();
        $discount=Discount:: create($inputs);
        
        if ($request->has('restaurant_id'))
        {
        $discount->restaurants()->attach($request->input('restaurant_id'));
        }
        return redirect()->route('discount.show');
    }
    public function show(Discount $discount){
        $discount=Discount::all();
        return view('discount.shows',['discounts'=>$discount]);
    }
    public function edit(Discount $discount){
        $restaurants=Restaurant::all();
        return view('discount.edit',['discounts'=>$discount],compact('restaurants'));
    }
    public function update(Discount $discount,Request $request){
        $inputs=request()->validate([
            'name'=>'required|min:3|max:10',
            'code'=>'required', 
            'discount_type'=>'required',       
            'amount'=>'required',
            'min_percentage_amount'=>'required',
            'start_at'=>'required',
            'end_at'=>'required',
            'max_uses'=>'required',
            'max_uses_per_customer'=>'required',
            'restaurant'=>'required'

        ],[
            'name.required' => 'Name is required',
            'code.required' =>'Code is required',
            'discount_type.required'=>'Discount type is required',
            'amount.required' =>'Amount is required',
            'min_percentage_amount.required' =>'Minimum percentage amount is required',
            'start_at.required' =>'Start date is required',
            'end_at.required' =>'End date is required',
            'max_uses.required' =>'Maximum uses is required',
            'max_uses_per_customer.required' =>'Maximum uses per customer is required',
            'restaurant.required' =>'Resturant is required',    
        ]);
       
        $discount->name=$inputs['name'];
        $discount->code=$inputs['code'];   
        $discount->discount_type=$inputs['discount_type'];    
        $discount->amount=$inputs['amount'];
        $discount->min_percentage_amount=$inputs['min_percentage_amount'];
        $discount->start_at=$inputs['start_at'];
        $discount->end_at=$inputs['end_at'];
        $discount->max_uses=$inputs['max_uses'];
        $discount->max_uses_per_customer=$inputs['max_uses_per_customer'];
        
        $discount->save();
        if ($request->has('restaurant'))
        {
        $discount->restaurants()->attach($request->input('restaurant'));
        }
        return redirect()->route('discount.show');

    }
      
        
    public function view(Discount $discount){
        $restaurants=Restaurant::all();
        return view('discount.view',['discounts'=>$discount],compact('restaurants'));
    }
    public function destroy($id){
       
        
        $discount=Discount::find($id);
        
        $discount->delete();
        
        return back();
        
        }
    
}
