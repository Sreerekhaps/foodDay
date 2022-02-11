<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;



class RoleController extends Controller
{
    //
    public function create(){
        $permissions=Permission::all();
       
        return view('admin.role.create',compact('permissions'));
    }
    public function store(Request $request){
        
        $inputs=request()->validate([
            'name'=>'required|min:3',
            'guard_name'=>'required|min:3',
            
         
        ],[
            'name.required' => 'Name is required',  
            'guard_name.required'=>'Guard name is required',
        ]);
        $role=Role:: create($inputs);
        if ($request->has('permission_id'))
        {
        $role->permissions()->attach($request->input('permission_id'));
        }
        
        // $roles = new Role;
        // $roles->name = $inputs['name'];
        // $roles->guard_name = $inputs['guard_name'];
        // // $roles->role_id=$role->id;
        // $roles = Role::findOrFail($id);
        
        // $roles->permissions()->attach($request->permission);
        
        // $roles->save();
        return redirect()->route('admin.role.show');
    }
    public function show(){
        $role=Role::all();
        return view('admin.role.shows',['roles'=>$role]);
        

    }
    public function edit(Role $role){
        $permissions=Permission::all();
        return view('admin.role.edit',['roles'=>$role],compact('permissions'));

    }
    public function update(Request $request,Role $role){
        $inputs=request()->validate([
            'name'=>'required|min:3',
            'guard_name'=>'required|min:3'
         
        ],[
            'name.required' => 'Name is required',  
            'guard_name.required'=>'Guard name is required',
        ]);
       
        $role->name = $inputs['name'];
        $role->guard_name = $inputs['guard_name'];
        $role->save();
        
        if ($request->has('permission_id'))
        {
            
        $role->permissions()->sync($request->input('permission_id'));
        
        }   
        return redirect()->route('admin.role.show');
    }
    public function view(Role $role){
        $permissions=Permission::all();
        return view('admin.role.view',['roles'=>$role],compact('permissions'));

    }
}
