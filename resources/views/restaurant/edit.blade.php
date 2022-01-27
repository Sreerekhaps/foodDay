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
   
    <form method="post" action="{{route('restaurant.update',$restaurants->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="container_fluid">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-xl-11">

        <h3 class="text-black mb-4" >Update Restaurant:{{$restaurants->name}}</h3>
        <div class="card" style="border-radius: 15px;">
          <div class="card-body">
        <div class="form-group">
            <label for="name"> Name</label>
            <input type="text" name="name" class="form-control" id="name" area-describedby="" 
            placeholder="Enter name"
            value="{{$restaurants->name}}">
            @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
           
        </div>
        <div class="form-group">
        <label for="name"> About</label>
            <textarea name="about" id="about" cols="151" rows="6">{{$restaurants->about}}</textarea>
            @if ($errors->has('about'))
                    <span class="text-danger">{{ $errors->first('about') }}</span>
                @endif
        </div>
        <div class="form-group">
        <label for="name"> Address</label>
            <textarea name="address" id="address" cols="151" rows="6">{{$restaurants->address}}</textarea>
            @if ($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                @endif
        </div>
        
        <div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="text" name="mobile" class="form-control" id="mobile" area-describedby="" 
            placeholder="Enter mobile"
            value="{{$restaurants->mobile}}">
            @if ($errors->has('mobile'))
                    <span class="text-danger">{{ $errors->first('mobile') }}</span>
                @endif
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <select name="city" id="city" class="form-control formselect required">
            <option value="{{$restaurants->city->id}}">{{$restaurants->city->name}}</option>
               @foreach($cities as $city)
                @if($city->name != $restaurants->city->name)
               <option value="{{ $city->id}}">{{($city->name)}}</option>
                @endif
               @endforeach
           </select>
           @if ($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                @endif 
        </div>
        <div class="form-group">
            <label for="mobile">Location</label>
            <input type="text" name="location" class="form-control" id="location" area-describedby="" 
            placeholder="Enter location"
            value="{{$restaurants->location}}">
            @if ($errors->has('location'))
                    <span class="text-danger">{{ $errors->first('location') }}</span>
                @endif
        </div>

        <div class="form-group">
        <label for="logo">Logo</label>
        <img src="{{$restaurants->logo}}" alt="" height="100px" width="200px">
        <input type="file" name="logo" class="form-control-file" id="logo">
        @if ($errors->has('logo'))
                    <span class="text-danger">{{ $errors->first('logo') }}</span>
                @endif
        </div>
        <div class="form-group">
        <label for="banner">Banner</label>
        <img src="{{$restaurants->banner}}" alt="" height="100px" width="200px">
        <input type="file" name="banner" class="form-control-file" id="banner">
        @if ($errors->has('banner'))
                    <span class="text-danger">{{ $errors->first('banner') }}</span>
                @endif
        </div>
        
        <div class="form-group">
            <label for="email">Minimum order value</label>
            <input type="text" name="value" class="form-control" id="value" area-describedby="" 
            placeholder="Enter value"
            value="{{$restaurants->min_order_value}}">
            @if ($errors->has('value'))
                    <span class="text-danger">{{ $errors->first('value') }}</span>
                @endif
        </div>
        <div class="form-group">
            <label for="password">Cost for two people</label>
            <input type="text" name="cost" class="form-control" id="cost" area-describedby="" 
            placeholder="Enter cost"
            value="{{$restaurants->cost_for_two_people}}">
            @if ($errors->has('cost'))
                    <span class="text-danger">{{ $errors->first('cost') }}</span>
                @endif
        </div>
        <div class="form-group">
            <label for="password">Default preparation time</label>
            <input type="text" name="time" class="form-control" id="time" area-describedby="" 
            placeholder="Enter time"
            value="{{$restaurants->default_preparation_time}}">
            @if ($errors->has('time'))
                    <span class="text-danger">{{ $errors->first('time') }}</span>
                @endif
        </div>
        <div class="form-group">
            <label for="cuisine">Cuisine</label>
            <select name="cuisine" id="cuisine" class="form-control formselect required">
            <option value="{{$restaurants->cuisine->id}}">{{$restaurants->cuisine->name}}</option>
               @foreach($cuisines as $cuisine)
                @if($cuisine->name != $restaurants->cuisine->name)
               <option value="{{ $cuisine->id}}">{{($cuisine->name)}}</option>
                @endif
               @endforeach
           </select>
           @if ($errors->has('cuisine'))
                    <span class="text-danger">{{ $errors->first('cuisine') }}</span>
                @endif
        </div>
        <div class="form-group">
        <label for="is_open">Is open</label>
        <input type="checkbox" name="is_open" id="is_open" value="{{$restaurants->is_open}}" {{ $restaurants->is_open=="1"? 'checked':'' }}>

        </div>
        <div class="form-group">
        <label for="allow_pickup">Allow Pickup</label>
        <input type="checkbox" name="allow_pickup" id="allow_pickup" value="{{$restaurants->allow_pickup}}" {{ $restaurants->allow_pickup=="1"? 'checked':'' }}>

        </div>
       
        <label for="status">Status</label>
        <select name="status" class="form-control" id="status" aria-describedby="">
        <option value="" disabled>Choose an Option</option>
        <option {{ old('status',$restaurants->status) == 'active'? 'selected':'' }} value="Active">Active</option>
        <option {{ old('status',$restaurants->status) == 'blocked'? 'selected':'' }} value="Blocked">Blocked</option>
        </select>
        <br>
</div>
</div>
</section>
       <button type="submit" class="btn btn-primary"style="float:right;">Update</button>
       <a href="{{route('restaurant.show')}}"style="float:right;margin-top:8px;font-size: 18px;margin-right:15px;text-decoration: none;"><b>Cancel </b></a>
        
    </form>

 

    @endsection
</x-admin-master>