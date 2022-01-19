<x-admin-master>
    @section('content')

    <h3>Order Details:{{$orders->id}}</h3><br>
    
    <div class="card shadow mb-4">
    <a href="{{route('order.edit',$orders->id)}}">  
      <input type="submit" value="Edit" class="btn btn-primary" style="float:right;"/>  
     </a>
    <form method="post" action="" enctype="multipart/form-data">
        @csrf
        <table>
        <tr>
            
            <td><label for="id"><h5>ID:</h5></label></td>
            <td style="float:right;"><h5>{{$orders->id}}</h5></td>
        </tr>
        <tr>
            <td><label for="id"><h5>Order date:</h5></label></td>
            <td style="float:right;"><h5>{{$orders->order_date}}</h5></td>
        </tr>
        <tr>
            <td><label for="id"><h5>Restaurant:</h5></label></td>
            <td style="float:right;"><h5>{{$orders->restaurant_id}}</h5></td>
        </tr>
        <tr>
            <td><label for="id"><h5>Customer:</h5></label></td>
            <td style="float:right;"><h5>{{$orders->customer}}</h5></td>
        </tr>
        <tr>
            <td><label for="id"><h5>Mobile:</h5></label></td>
            <td style="float:right;"><h5>{{$orders->mobile}}</h5></td>
        </tr>
        <tr>
            <td><label for="id"><h5>Order type:</h5></label></td>
            <td style="float:right;"><h5>{{$orders->order_type}}</h5></td>
        </tr>
        <tr>
            <td><label for="id"><h5>Order Status:</h5></label></td>
            <td style="float:right;"><h5>{{$orders->order_status}}</h5></td>
        </tr>
        <tr>
            <td><label for="id"><h5>Delivery status:</h5></label></td>
            <td style="float:right;"><h5>{{$orders->delivery_status}}</h5></td>
        </tr>
        <tr>
            <td><label for="id"><h5>Payment Status:</h5></label></td>
            <td style="float:right;"><h5>{{$orders->payment_status}}</h5></td>
        </tr>
        <tr>
            <td><label for="id"><h5>Payment method:</h5></label></td>
            <td style="float:right;"><h5>{{$orders->payment_method}}</h5></td>
        </tr>
        <tr>
            <td><label for="id"><h5>Channel:</h5></label></td>
            <td style="float:right;"><h5>{{$orders->channel}}</h5></td>
        </tr>
        <tr>
            <td><label for="id"><h5>Item Total:</h5></label></td>
            <td style="float:right;"><h5>{{$orders->item_total}}</h5></td>
        </tr>
        <tr>
            <td><label for="id"><h5>Sub Total:</h5></label></td>
            <td style="float:right;"><h5>{{$orders->sub_total}}</h5></td>
        </tr>
        <tr>
            <td><label for="id"><h5>Delivery fee:</h5></label></td>
            <td style="float:right;"><h5>{{$orders->delivery_fee}}</h5></td>
        </tr>
        <tr>
            <td><label for="id"><h5>Tax:</h5></label></td>
            <td style="float:right;"><h5>{{$orders->tax}}</h5></td>
        </tr>
        <tr>
            <td><label for="id"><h5>Discount:</h5></label></td>
            <td style="float:right;"><h5>{{$orders->discount}}</h5></td>
        </tr>
        <tr>
            <td><label for="id"><h5>Grand total:</h5></label></td>
            <td style="float:right;"><h5>{{$orders->grand_total}}</h5></td>
        </tr>
        </table>
        

        
        
        
        
       
    </form>
    </div>

   
    @endsection
</x-admin-master>