<x-admin-master>
    @section('content')

    <h3>Update Restaurant:{{$restaurants->name}}</h3>
    <form method="post" action="{{route('restaurant.update',$restaurants->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="name"> Name</label>
            <input type="text" name="name" class="form-control" id="name" area-describedby="" 
            placeholder="Enter name"
            value="{{$restaurants->name}}">
           
        </div>
        <div class="form-group">
        <label for="name"> About</label>
            <textarea name="about" id="about" cols="140" rows="6">{{$restaurants->about}}</textarea>
        </div>
        <div class="form-group">
        <label for="name"> Address</label>
            <textarea name="address" id="address" cols="140" rows="6">{{$restaurants->address}}</textarea>
        </div>
        
        <div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="text" name="mobile" class="form-control" id="mobile" area-describedby="" 
            placeholder="Enter mobile"
            value="{{$restaurants->mobile}}">
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
            
        </div>
        <div class="form-group">
            <label for="mobile">Location</label>
            <input type="text" name="location" class="form-control" id="location" area-describedby="" 
            placeholder="Enter location"
            value="{{$restaurants->location}}">
        </div>
        
        <div class="form-group">
            <label for="email">Minimum order value</label>
            <input type="text" name="value" class="form-control" id="value" area-describedby="" 
            placeholder="Enter value"
            value="{{$restaurants->min_order_value}}">
        </div>
        <div class="form-group">
            <label for="password">Cost for two people</label>
            <input type="text" name="cost" class="form-control" id="cost" area-describedby="" 
            placeholder="Enter cost"
            value="{{$restaurants->cost_for_two_people}}">
        </div>
        <div class="form-group">
            <label for="password">Default preparation time</label>
            <input type="text" name="time" class="form-control" id="time" area-describedby="" 
            placeholder="Enter time"
            value="{{$restaurants->default_preparation_time}}">
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
        </div>
        <div class="form-group">
        <label for="is_open">Is open</label>
        <input type="checkbox" name="is_open" id="is_open" value="{{$restaurants->is_open}}" {{ $restaurants->is_open=="1"? 'checked':'' }}>

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