<x-admin-master>
    @section('content')

    <h3> Discount Code Details:{{$discounts->code}}</h3><br>
    
    <div class="card shadow mb-4">
    <a href="{{route('discount.edit',$discounts->id)}}">  
      <input type="submit" value="Edit" class="btn btn-primary" style="float:right;"/>  
     </a>
    <form method="post" action="" enctype="multipart/form-data">
        @csrf
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tbody>


        <tr>
            
            <td><label for="id" style="margin-left:20px"><h5>ID:</h5></label></td>
            <td><h5>{{$discounts->id}}</h5></td>
        </tr>
        <tr>
            <td><label for="id" style="margin-left:20px"><h5>Name:</h5></label></td>
            <td><h5>{{$discounts->name}}</h5></td>
        </tr>
        <tr>
            <td><label for="id" style="margin-left:20px"><h5>Code:</h5></label></td>
            <td><h5>{{$discounts->code}}</h5></td>
        </tr>
        <tr>
            <td><label for="id" style="margin-left:20px"><h5>Amount:</h5></label></td>
            <td><h5>{{$discounts->amount}}</h5></td>
        </tr>
        <tr>
            <td><label for="id" style="margin-left:20px"><h5>Minimum Purchase Amount:</h5></label></td>
            <td><h5>{{$discounts->min_percentage_amount}}</h5></td>
        </tr>
        <tr>
            <td><label for="id" style="margin-left:20px"><h5>Starts At:</h5></label></td>
            <td><h5>{{$discounts->start_at}}</h5></td>
        </tr>
        <tr>
            <td><label for="id" style="margin-left:20px"><h5>Ends At:</h5></label></td>
            <td><h5>{{$discounts->end_at}}</h5></td>
        </tr>
        <tr>
            <td><label for="id" style="margin-left:20px"><h5>Maximum Uses:</h5></label></td>
            <td><h5>{{$discounts->max_uses}}</h5></td>
        </tr>
        <tr>
            <td><label for="id" style="margin-left:20px"><h5>Maximum uses per customer:</h5></label></td>
            <td><h5>{{$discounts->max_uses_per_customer}}</h5></td>
        </tr>
        <tr>
            <td><label for="id" style="margin-left:20px"><h5>Restaurant:</h5></label></td>
            <td>@foreach($restaurants as $restaurant)
                           @if($discounts->restaurants->contains($restaurant->id))

                            <a href="{{route('restaurant.view',$restaurant->id)}}">{{$restaurant->name}}</a>
                          
                          
                           @endif 
                          
            @endforeach  </td>
        </tr>
</tbody>

       
        </table>
        

        
        
        
        
       
    </form>
    </div>

   
    @endsection
</x-admin-master>