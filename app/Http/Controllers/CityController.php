<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;


class CityController extends Controller
{
    //
    public function create(){
        return view('admin.city.create');
    }
    public function store(){
        $inputs=request()->validate([
            'name'=>'required|min:3'
         
        ],[
            'name.required' => 'Name is required',    
        ]);
        $cities = new City;
        $cities->name = $inputs['name'];
        $cities->save();
        return redirect()->route('admin.city.show');
    }
    public function show(){
        $city=City::all();
        return view('admin.city.shows',['cities'=>$city]);

    }
    public function edit(City $city){
        return view('admin.city.edit',['cities'=>$city]);

    }
    public function update(City $city){
        $inputs=request()->validate([
            'name'=>'required|min:3'

        ],[
            'name.required' => 'Name is required',        
        ]);
        $city->name=$inputs['name'];
        $city->save();
        return redirect()->route('admin.city.show');
    }
    public function view(City $city){

        return view('admin.city.view',['cities'=>$city]);

    }
}
