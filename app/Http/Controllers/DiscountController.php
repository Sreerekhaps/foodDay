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
    public function store(){
        $inputs=request()->validate([
            'name'=>'required|min:3|max:10',
            'code'=>'required',
            'discount_type'=>'required',
            'amount'=>'required',
            'min'=>'required',
            'date'=>'required',
            'edate'=>'required',
            'uses'=>'required',
            'cuses'=>'required',
            'rest'=>'required',
        ],[
            'name.required' => 'Name is required',
            'code.required' =>'Code is required',
            'discount_type.required'=>'Discount type is required',
            'amount.required' =>'Amount is required',
            'min.required' =>'Minimum percentage amount is required',
            'date.required' =>'Start date is required',
            'date.required' =>'Start date is required',
            'edate.required' =>'End date is required',
            'uses.required' =>'Maximum uses is required',
            'cuses.required' =>'Maximum uses per customer is required',
            'rest.required' =>'Resturant is required',

        ]);
        $discount=new Discount;
        $discount->name=$inputs['name'];
        $discount->code=$inputs['code'];
        $discount->discount_type=$inputs['discount_type'];
        $discount->amount=$inputs['amount'];
        $discount->min_percentage_amount=$inputs['min'];
        $discount->start_at=$inputs['date'];
        $discount->end_at=$inputs['edate'];
        $discount->max_uses=$inputs['uses'];
        $discount->max_uses_per_customer=$inputs['cuses'];
        $discount->restaurant_id=$inputs['rest'];
        $discount->save();
        return redirect()->route('discount.show');
    }
    public function show(Discount $discount){
        $discount=Discount::all();
        return view('discount.shows',['discounts'=>$discount]);
    }
    public function edit(Discount $discount){
        return view('discount.edit',['discounts'=>$discount]);
    }
    public function update(Discount $discount){
        $inputs=request()->validate([
            'name'=>'required|min:3|max:10',
            'code'=>'required', 
            'discount_type'=>'required',       
            'amount'=>'required',
            'min'=>'required',
            'date'=>'required',
            'edate'=>'required',
            'uses'=>'required',
            'cuses'=>'required',
            'rest'=>'required'

        ],[
            'name.required' => 'Name is required',
            'code.required' =>'Code is required',
            'discount_type.required'=>'Discount type is required',
            'amount.required' =>'Amount is required',
            'min.required' =>'Minimum percentage amount is required',
            'date.required' =>'Start date is required',
            'date.required' =>'Start date is required',
            'edate.required' =>'End date is required',
            'uses.required' =>'Maximum uses is required',
            'cuses.required' =>'Maximum uses per customer is required',
            'rest.required' =>'Resturant is required',    
        ]);
       
        $discount->name=$inputs['name'];
        $discount->code=$inputs['code'];   
        $discount->discount_type=$inputs['discount_type'];    
        $discount->amount=$inputs['amount'];
        $discount->min_percentage_amount=$inputs['min'];
        $discount->start_at=$inputs['date'];
        $discount->end_at=$inputs['edate'];
        $discount->max_uses=$inputs['uses'];
        $discount->max_uses_per_customer=$inputs['cuses'];
        $discount->restaurant_id=$inputs['rest'];
        $discount->save();
        return redirect()->route('discount.show');

    }
    public function view(Discount $discount){
        return view('discount.view',['discounts'=>$discount]);
    }
    public function destroy($id){
       
        
        $discount=Discount::find($id);
        
        $discount->delete();
        
        return back();
        
        }
    
}
