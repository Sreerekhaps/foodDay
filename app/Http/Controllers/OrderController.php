<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    //
    public function show(){
        $order=Order::all();
        return view('order.shows',['orders'=>$order]);
    }
    public function edit(Order $order){
        return view('order.edit',['orders'=>$order]);
    }
    public function update(Order $order){
        $inputs=request()->validate([
            'payment_status'=>'required',
            'order_status'=>'required',
            
        ]);
        $order->payment_status=$inputs['payment_status'];
        $order->order_status=$inputs['order_status'];
       
        $order->save();
        return redirect()->route('order.show');  
    }
    public function view(Order $order){
        return view('order.view',['orders'=>$order]);
    }
}
