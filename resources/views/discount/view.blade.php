<x-admin-master>
    @section('content')

    <h3> Discount Code Details:{{$discounts->code}}</h3><br>
    
    <div class="card shadow mb-4">
    <a href="{{route('discount.edit',$discounts->id)}}">  
      <input type="submit" value="Edit" class="btn btn-primary" style="float:right;"/>  
     </a>
    <form method="post" action="" enctype="multipart/form-data">
        @csrf
        <table>
        <tr>
            
            <td><label for="id"><h5>ID:</h5></label></td>
            <td style="float:right;"><h5>{{$discounts->id}}</h5></td>
        </tr>
        <tr>
            <td><label for="id"><h5>Name:</h5></label></td>
            <td style="float:right;"><h5>{{$discounts->name}}</h5></td>
        </tr>
        <tr>
            <td><label for="id"><h5>Code:</h5></label></td>
            <td style="float:right;"><h5>{{$discounts->code}}</h5></td>
        </tr>
        <tr>
            <td><label for="id"><h5>Amount:</h5></label></td>
            <td style="float:right;"><h5>{{$discounts->amount}}</h5></td>
        </tr>
        <tr>
            <td><label for="id"><h5>Minimum Purchase Amount:</h5></label></td>
            <td style="float:right;"><h5>{{$discounts->min_percentage_amount}}</h5></td>
        </tr>
        <tr>
            <td><label for="id"><h5>Starts At:</h5></label></td>
            <td style="float:right;"><h5>{{$discounts->start_at}}</h5></td>
        </tr>
        <tr>
            <td><label for="id"><h5>Ends At:</h5></label></td>
            <td style="float:right;"><h5>{{$discounts->end_at}}</h5></td>
        </tr>
        <tr>
            <td><label for="id"><h5>Maximum Uses:</h5></label></td>
            <td style="float:right;"><h5>{{$discounts->max_uses}}</h5></td>
        </tr>
        <tr>
            <td><label for="id"><h5>Maximum uses per customer:</h5></label></td>
            <td style="float:right;"><h5>{{$discounts->max_uses_per_customer}}</h5></td>
        </tr>
        <tr>
            <td><label for="id"><h5>Payment method:</h5></label></td>
            <td style="float:right;"><h5>{{$discounts->restaurant_id}}</h5></td>
        </tr>
       
        </table>
        

        
        
        
        
       
    </form>
    </div>

   
    @endsection
</x-admin-master>