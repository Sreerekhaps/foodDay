<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{

    
    //
    public function show(Request $request){
        $order=Order::all();
        $order = Order::when(
            $request->input('id'),
            function ($query) use ($request)
            {
            $query->where('id', 'like', '%'.$request->input('id').'%');
                 
            }
            ) ->orderBy('created_at', 'desc')->paginate(5);
        
            $request->flash();
        return view('admin.order.shows',['orders'=>$order]);
    }
    public function edit(Order $order){
        return view('admin.order.edit',['orders'=>$order]);
    }
    public function update(Order $order){
        $inputs=request()->validate([
            'payment_status'=>'required',
            'order_status'=>'required',
            
        ]);
        $order->payment_status=$inputs['payment_status'];
        $order->order_status=$inputs['order_status'];
       
        $order->save();
        return redirect()->route('admin.order.show');  
    }
    public function view(Order $order){
        return view('admin.order.view',['orders'=>$order]);
    }
    // public function search($id){
    //     if($request->ajax()){
    //         $data=Order::where("id","like","%".$request->search."%")->get();

    //         $output='';
    //         if(count($data)>0){

               

    //         }
    //         else{
    //             $output .='No result';
    //         }
    //     }
        
    // }
         
}
