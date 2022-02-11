<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuisine;

class CuisineController extends Controller
{
    //
    public function create(){
        return view('admin.cuisine.create');
    }
    public function store(){
        $inputs=request()->validate([
            'name'=>'required|min:3'
        ],[
            'name.required' => 'Name is required',    

        ]);
        $cuisines= new Cuisine;
        $cuisines->name=$inputs['name'];
        $cuisines->save();
        return redirect()->route('admin.cuisine.show');

    }
    public function show(){
        $cuisine=Cuisine::all();
        return view('admin.cuisine.shows',['cuisines'=>$cuisine]);

    }
    public function edit(Cuisine $cuisine){
        return view('admin.cuisine.edit',['cuisines'=>$cuisine]);
        
    }
    public function update(Cuisine $cuisine){
        $inputs=request()->validate([
            'name'=>'required|min:3'

        ],[
            'name.required' => 'Name is required',    
    
        ]);
        $cuisine->name=$inputs['name'];
        $cuisine->save();
        return redirect()->route('admin.cuisine.show');
    }
    public function view(Cuisine $cuisine){
        return view('admin.cuisine.view',['cuisines'=>$cuisine]);
        
    }
}
