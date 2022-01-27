<x-admin-master>
    @section('content')

    <h3>Restaurants details:{{$restaurant->name}}</h3><br>
    
    <div class="card shadow mb-4">
    <a href="{{route('restaurant.edit',$restaurant->id)}}">  
      <input type="submit" value="Edit" class="btn btn-primary" style="float:right;"/>  
     </a>
    <form method="post" action="" enctype="multipart/form-data">
        @csrf
        <table>
        <tr>
            <td><label for="id" style="margin-left:20px"><h5>ID:</h5></label></td>
            <td ><h5>{{$restaurant->id}}</h5></td>
        </tr>
        <tr>
            <td><label for="id" style="margin-left:20px"><h5>Name:</h5></label></td>
            <td><h5>{{$restaurant->name}}</h5></td>
        </tr>
        <tr>
            <td><label for="id" style="margin-left:20px"><h5>Address:</h5></label></td>
            <td><h5>{{$restaurant->address}}</h5></td>
        </tr>
        <tr>
            <td><label for="id" style="margin-left:20px"><h5>Mobile:</h5></label></td>
            <td><h5>{{$restaurant->mobile}}</h5></td>
        </tr>
        <tr>
            <td><label for="id" style="margin-left:20px"><h5>City:</h5></label></td>
            <td><h5>{{$restaurant->city->name}}</h5></td>
        </tr>
        <tr>
            <td><label for="id" style="margin-left:20px"><h5>Logo:</h5></label></td>
            <td><div><img src="{{$restaurant->logo}}" height="100px" width="200px"> <br></div></td>
           
        </tr>
        
        <tr>
            <td><label for="id" style="margin-left:20px"><h5>Banner:</h5></label></td>
            <td><div><img src="{{$restaurant->banner}}"  height="100px" width="200px"></div></td>
        </tr>
        <tr>
            <td><label for="id" style="margin-left:20px"><h5>Minimum order value:</h5></label></td>
            <td><h5>{{$restaurant->min_order_value}}</h5></td>
        </tr>
        <tr>
            <td><label for="id" style="margin-left:20px"><h5>Cost for two people:</h5></label></td>
            <td><h5>{{$restaurant->cost_for_two_people}}</h5></td>
        </tr>
        <tr>
            <td><label for="id" style="margin-left:20px"><h5>Default preparation time:</h5></label></td>
            <td><h5>{{$restaurant->default_preparation_time}}</h5></td>
        </tr>
        <tr>
            <td><label for="id" style="margin-left:20px"><h5>Cuisine:</h5></label></td>
            <td><h5>{{$restaurant->cuisine->name}}</h5></td>
        </tr>
        <tr>
            <td><label for="id" style="margin-left:20px"><h5>Is Open:</h5></label></td>
            <td>
                           @if($restaurant->is_open ==1) 

                            <i class="fas fa-check-circle"></i>
                          
                           @else
                            <i class="far fa-times-circle"></i>
                           @endif 
                          </td>
        </tr>
        <tr>
            <td><label for="id" style="margin-left:20px"><h5>Allow Pickup:</h5></label></td>
            <td>
                           @if($restaurant->allow_pickup ==1) 

                            <i class="fas fa-check-circle"></i>
                          
                           @else
                            <i class="far fa-times-circle"></i>
                           @endif 
                          </td>
        </tr>
        <tr>
            <td><label for="id" style="margin-left:20px"><h5>Status:</h5></label></td>
            <td><h5>{{$restaurant->status}}</h5></td>
        </tr>
        </table>
        

        
        
        
        
       
    </form>
    </div>

   
    @endsection
</x-admin-master>