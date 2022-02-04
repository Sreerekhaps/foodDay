<x-admin-master>
    @section('content')
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif
<form method="post" action="{{route('role.update',$roles->id)}}" enctype="multipart/form-data" >
@csrf
@method('PATCH')
<section>
  <div class="container_fluid">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-xl-11">

        <h3 class="text-black mb-4" >Update Role:{{$roles->name}}</h3>

        <div class="card" style="border-radius: 15px;">
          <div class="card-body">

            <div class="row align-items-center pt-3 pb-2">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Name</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" name="name" id="name" class="form-control form-control-sm" value="{{$roles->name}}"/>
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif

              </div>
            </div>
            <div class="row align-items-center pt-3 pb-2">
            <div class="col-md-3 ps-5">

            <h6 class="mb-0">Guard Name</h6>

            </div>
            <div class="col-md-9 pe-5">

            <select name="guard_name" id="guard_name" class="form-select form-select-md">
            <option value="{{$roles->guard_name}}">{{$roles->guard_name}}</option>   
               <option value="Web">Web</option>
               <option value="Api">Api</option>
           </select>
            @if ($errors->has('guard_name'))
                <span class="text-danger">{{ $errors->first('guard_name') }}</span>
            @endif

            </div>
            </div>
            <div class="row align-items-center pt-3 pb-2">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Permissions </h6>

              </div>
              <div class="col-md-9 pe-5">
              @foreach($permissions as $permission)
              
              <label><input type="checkbox" name="permission_id[]" value="{{$permission->id}}"  
               @if($roles->permissions->contains($permission->id)) 
               checked='checked'
               @endif >{{$permission->name}}</label><br>
              
              @endforeach
      
            </div>
            </div>
            
        </div>


      </div>
    </div>
  </div>
</section>
<br>
<button type="submit" class="btn btn-primary" style="float:right;margin-right:55px;">Update</button>

        <a href="{{route('role.show')}}"style="float:right;margin-top:8px;font-size: 18px;margin-right:15px;text-decoration: none;"><b>Cancel </b></a>
</form>
<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->


    @endsection
</x-admin-master>