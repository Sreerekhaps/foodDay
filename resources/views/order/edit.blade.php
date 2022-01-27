<x-admin-master>
    @section('content')

    <form method="post" action="{{route('order.update',$orders->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="container_fluid">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-xl-11">

        <h3 class="text-black mb-4" >Order Details:{{$orders->id}}</h3>
        <div class="card" style="border-radius: 15px;">
          <div class="card-body">
        <div class="form-group">
            <label for="payment_status"> Payment status</label>
            <select name="payment_status" id="payment_status" class="form-control formselect required">
            <option value="{{$orders->payment_status}}">{{$orders->payment_status}}</option>   
              
               <option value="Unpaid">Unpaid</option>
               <option value="Paid">Paid</option>

              
           </select>
        </div>
        <div class="form-group">
            <label for="order_status"> Order status</label>
            <select name="order_status" id="order_status" class="form-control formselect required">
            <option value="{{$orders->order_status}}">{{$orders->order_status}}</option>   

              
               <option value="Pending">Pending</option>
               <option value="Accepted">Accepted</option>
               <option value="Rejected">Rejected</option>


              
           </select>
        </div>
</div>
</div>
</section>   
        <button type="submit" class="btn btn-primary" style="float:right;">Update</button>
        <a href="{{route('order.show')}}"style="float:right;margin-top:8px;font-size: 18px;margin-right:15px;text-decoration: none;"><b>Cancel </b></a>
        
        
        
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