<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuisine;

class CuisineController extends Controller
{
    //
    public function create(){
        return view('cuisine.create');
    }
    public function store(){
        $inputs=request()->validate([
            'name'=>'required|min:3'
        ]);
        $cuisines= new Cuisine;
        $cuisines->name=$inputs['name'];
        $cuisines->save();
        return redirect()->route('cuisine.show');

    }
    public function show(){
        $cuisine=Cuisine::all();
        return view('cuisine.shows',['cuisines'=>$cuisine]);

    }
    public function edit(Cuisine $cuisine){
        return view('cuisine.edit',['cuisines'=>$cuisine]);
        
    }
    public function update(Cuisine $cuisine){
        $inputs=request()->validate([
            'name'=>'required|min:3'
        ]);
        $cuisine->name=$inputs['name'];
        $cuisine->save();
        return redirect()->route('cuisine.show');
    }
    public function view(Cuisine $cuisine){
        return view('cuisine.view',['cuisines'=>$cuisine]);
        
    }
}
