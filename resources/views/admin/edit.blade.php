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
  
    <form method="post" action="{{route('admin.update',$users->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="container_fluid">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-xl-11">

        <h3 class="text-black mb-4" >Update user:{{$users->first_name}}</h3>
        <div class="card" style="border-radius: 15px;">
          <div class="card-body">
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" class="form-control" id="first_name" area-describedby="" 
            placeholder="Enter name"
            value="{{$users->first_name}}">
            @if ($errors->has('first_name'))
                    <span class="text-danger">{{ $errors->first('first_name') }}</span>
                @endif
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" class="form-control" id="last_name" area-describedby="" 
            placeholder="Enter name"
            value="{{$users->last_name}}">
            @if ($errors->has('last_name'))
                    <span class="text-danger">{{ $errors->first('last_name') }}</span>
                @endif
        </div>
        <div class="form-group">
            <label for="phone_code">Phone code</label>
            <input type="text" name="phone_code" class="form-control" id="phone_code" area-describedby="" 
            placeholder="Enter Phone code"
            value="{{$users->phone_code}}">
            @if ($errors->has('phone_code'))
                    <span class="text-danger">{{ $errors->first('phone_code') }}</span>
                @endif
        </div>
        <div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="text" name="mobile" class="form-control" id="mobile" area-describedby="" 
            placeholder="Enter mobile"
            value="{{$users->mobile}}">
            @if ($errors->has('mobile'))
                    <span class="text-danger">{{ $errors->first('mobile') }}</span>
                @endif
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" id="email" area-describedby="" 
            placeholder="Enter email"
            value="{{$users->email}}">
            @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" name="password" class="form-control" id="password" area-describedby="" 
            placeholder="Enter password"
            value="{{$users->password}}">
            @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
        </div>
</div>
</div>
</section>


        <button type="submit" class="btn btn-primary"  style="float:right;">Update</button>
        <a href="{{route('admin.show')}}"  style="float:right;margin-top:8px;font-size: 18px;margin-right:15px;text-decoration: none;"><b>Cancel </b></a>
        
    </form>
    <!-- @if(count($errors)> 0)

<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>

@endif -->

    @endsection
</x-admin-master>