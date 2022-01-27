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
    <form method="post" action="{{route('restaurant.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="container_fluid">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-xl-11">

        <h3 class="text-black mb-4" >Create Restaurants</h3>
        <div class="card" style="border-radius: 15px;">
          <div class="card-body">
        <div class="form-group">
            <label for="name"> Name</label>
            <input type="text" name="name" class="form-control" id="name" area-describedby="" 
            placeholder="Enter name">
            @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
           
        </div>
        <div class="form-group">
        <label for="name"> About</label>
            <textarea name="about" id="about" cols="151" rows="6"></textarea>
            @if ($errors->has('about'))
                    <span class="text-danger">{{ $errors->first('about') }}</span>
                @endif
        </div>
        <div class="form-group">
        <label for="name"> Address</label>
            <textarea name="address" id="address" cols="151" rows="6"></textarea>
            @if ($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                @endif
        </div>
        
        <div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="text" name="mobile" class="form-control" id="mobile" area-describedby="" 
            placeholder="Enter mobile">
            @if ($errors->has('mobile'))
                    <span class="text-danger">{{ $errors->first('mobile') }}</span>
                @endif
        </div>
        <div class="form-group">
            <label for="city">City</label>
           <select name="city" id="city" class="form-control formselect required">
           <option value="0" disabled selected>___</option>
               @foreach($cities as $city)
               <option value="{{ $city->id}}">{{($city->name)}}</option>
               @endforeach
           </select>
           @if ($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                @endif
        </div>
        <div class="form-group">
            <label for="mobile">Location</label>
            <input type="text" name="location" class="form-control" id="location" area-describedby="" 
            placeholder="Enter location">
            @if ($errors->has('location'))
                    <span class="text-danger">{{ $errors->first('location') }}</span>
                @endif
        </div>
        <div class="form-group">
        <label for="logo">Logo</label>
        <input type="file" name="logo" class="form-control-file" id="logo">
        <!-- @if ($errors->has('logo'))
                    <span class="text-danger">{{ $errors->first('logo') }}</span>
                @endif -->
        </div>
        <div class="form-group">
        <label for="banner">Banner</label>
        <input type="file" name="banner" class="form-control-file" id="banner">
        <!-- @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif -->
        </div>
        <div class="form-group">
            <label for="email">Minimum order value</label>
            <input type="text" name="value" class="form-control" id="value" area-describedby="" 
            placeholder="Enter value">
            @if ($errors->has('value'))
                    <span class="text-danger">{{ $errors->first('value') }}</span>
                @endif
        </div>
        <div class="form-group">
            <label for="password">Cost for two people</label>
            <input type="text" name="cost" class="form-control" id="cost" area-describedby="" 
            placeholder="Enter cost">
            @if ($errors->has('cost'))
                    <span class="text-danger">{{ $errors->first('cost') }}</span>
                @endif
        </div>
        <div class="form-group">
            <label for="password">Default preparation time</label>
            <input type="text" name="time" class="form-control" id="time" area-describedby="" 
            placeholder="Enter time">
            @if ($errors->has('time'))
                    <span class="text-danger">{{ $errors->first('time') }}</span>
                @endif
        </div>
       
        <div class="form-group">
            <label for="cuisine">Cuisine</label>
            <select name="cuisine" id="cuisine" class="form-control" >
                <option value="0" disabled selected>___</option>
               @foreach($cuisines as $cuisine)
               <option value="{{ $cuisine->id}}">{{($cuisine->name)}}</option>
               @endforeach
           </select>
           @if ($errors->has('cuisine'))
                    <span class="text-danger">{{ $errors->first('cuisine') }}</span>
                @endif
        </div>
        <div class="form-group">
        <label for="is_open">Is open</label>

            <!-- <input type="checkbox" name="open" id="open" class="form-check-input" value="Is open">Is open -->
            <input type="checkbox" id="is_open" name="is_open" value="1">
           
        </div>
        <div class="form-group">
        <label for="allow_pickup">Allow Pickup</label>

            <input type="checkbox" id="allow_pickup" name="allow_pickup" value="1">
           
        </div>

       
        <br>
        </div>
        </div>
        </section>  
        <button type="submit" class="btn btn-primary"style="float:right;">Create</button>

        <a href="{{route('restaurant.show')}}"style="float:right;margin-top:8px;font-size: 18px;margin-right:15px;text-decoration: none;"><b>Cancel </b></a>
    </form>
    <!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
       
       <script>
         $(document).ready(function() {
             // Select2 Multiple
             $('.select2-multiple').select2({
                 placeholder: "Select",
                 allowClear: true,
                 tokenSeparators:['/',','," "]
             });
 
         });
 
     </script> -->

    
    <!-- @if(count($errors)> 0)

<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>

@endif -->

<!-- <script>
    $(document).ready(function(){
        $('.mul-select').select2({
      placeholder: "Select a state",
      allowClear: true,
      tags: true,
      tokenSeparators: [',', ' ']
    });
});
</script> -->

    @endsection
    
</x-admin-master>