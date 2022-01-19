<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
            'first_name'=>'required|min:3|max:10',
            'last_name'=>'required|max:8',
            'phone_code'=>'required|max:5',
            'mobile'=>'required|min:10|max:12',
            'email'=>'required|email',
            'password'=>'required|min:4',
        ]);
        auth()->user()->create($inputs);
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
}
