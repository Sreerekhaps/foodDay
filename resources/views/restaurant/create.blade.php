<x-admin-master>
    @section('content')

    <h2>Create Restaurants</h2>
    <form method="post" action="{{route('restaurant.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name"> Name</label>
            <input type="text" name="name" class="form-control" id="name" area-describedby="" 
            placeholder="Enter name">
           
        </div>
        <div class="form-group">
        <label for="name"> About</label>
            <textarea name="about" id="about" cols="140" rows="6"></textarea>
        </div>
        <div class="form-group">
        <label for="name"> Address</label>
            <textarea name="address" id="address" cols="140" rows="6"></textarea>
        </div>
        
        <div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="text" name="mobile" class="form-control" id="mobile" area-describedby="" 
            placeholder="Enter mobile">
        </div>
        <div class="form-group">
            <label for="city">City</label>
           <select name="city" id="city" class="form-control formselect required">
           <option value="0" disabled selected>___</option>
               @foreach($cities as $city)
               <option value="{{ $city->id}}">{{($city->name)}}</option>
               @endforeach
           </select>
        </div>
        <div class="form-group">
            <label for="mobile">Location</label>
            <input type="text" name="location" class="form-control" id="location" area-describedby="" 
            placeholder="Enter location">
        </div>
        <div class="form-group">
            <label for="logo">Logo</label>
            <input type="file" name="logo"  id="logo" area-describedby="" 
            placeholder="Enter location">
        </div>
        <div class="form-group">
            <label for="banner">Banner</label>
            <input type="file" name="banner"  id="banner" area-describedby="" 
            placeholder="Enter location">
        </div>
        <div class="form-group">
            <label for="email">Minimum order value</label>
            <input type="text" name="value" class="form-control" id="value" area-describedby="" 
            placeholder="Enter value">
        </div>
        <div class="form-group">
            <label for="password">Cost for two people</label>
            <input type="text" name="cost" class="form-control" id="cost" area-describedby="" 
            placeholder="Enter cost">
        </div>
        <div class="form-group">
            <label for="password">Default preparation time</label>
            <input type="text" name="time" class="form-control" id="time" area-describedby="" 
            placeholder="Enter time">
        </div>
        <div class="form-group">
            <label for="cuisine">Cuisine</label>
            <select name="cuisine" id="cuisine" class="form-control formselect required">
                <option value="0" disabled selected>___</option>
               @foreach($cuisines as $cuisine)
               <option value="{{ $cuisine->id}}">{{($cuisine->name)}}</option>
               @endforeach
           </select>
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
       
        
        
        <a href="{{route('restaurant.show')}}">Cancel </a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @if(count($errors)> 0)

<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>

@endif

    @endsection
</x-admin-master>