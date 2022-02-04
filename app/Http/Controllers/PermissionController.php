<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permission;
use App\Models\Role;


class PermissionController extends Controller
{
    //
    public function create(){
        $roles=Role::all();
       
        return view('permission.create',compact('roles'));
    }
    public function store(Request $request){
        
        $inputs=request()->validate([
            'name'=>'required|min:3',
            'guard_name'=>'required|min:3',
            
         
        ],[
            'name.required' => 'Name is required',  
            'guard_name.required'=>'Guard name is required',
        ]);
        $permission=Permission:: create($inputs);
        if ($request->has('role_id'))
        {
        $permission->roles()->attach($request->input('role_id'));
        }
        
        return redirect()->route('permission.show');
    }
    public function show(){
        $permission=Permission::all();
        return view('permission.shows',['permissions'=>$permission]);
        

    }
    public function edit(Permission $permission){
        $roles=Role::all();
        return view('permission.edit',['permissions'=>$permission],compact('roles'));

    }
    public function update(Permission $permission){
        $inputs=request()->validate([
            'name'=>'required|min:3',
            'guard_name'=>'required|min:3'
         
        ],[
            'name.required' => 'Name is required',  
            'guard_name.required'=>'Guard name is required',
        ]);
        $permission->name = $inputs['name'];
        $permission->guard_name = $inputs['guard_name'];
        $permission->save();
        return redirect()->route('permission.show');
    }
    public function view(Permission $permission){
        $roles=Role::all();
        return view('permission.view',['permissions'=>$permission],compact('roles'));

    }
    public function destroy($id){
       
        
        $permission=Permission::find($id);
        
        $permission->delete();
        
        return back();
        
        }
    
}
