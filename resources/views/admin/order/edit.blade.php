<x-admin-master>
    @section('content')
    
<form method="post" action="{{route('admin.order.update',$orders->id)}}" enctype="multipart/form-data" >
@csrf
@method('PATCH')
<section>
  <div class="container_fluid">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-xl-11">

        <h3 class="text-black mb-4" >Order Details:{{$orders->id}}</h3>

        <div class="card" style="border-radius: 15px;">
          <div class="card-body">

            <div class="row align-items-center pt-3 pb-2">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Payment status</h6>

              </div>
              <div class="col-md-9 pe-5">

            
            
            <select name="payment_status" id="payment_status" class="form-select form-select-md">
            <option value="{{$orders->payment_status}}">{{$orders->payment_status}}</option>  
            @if($orders->payment_status=='Unpaid')
              <option value="Unpaid">Unpaid</option>
              <option value="Paid">Paid</option> 
            @else
            <select disabled class="form-select form-select-md">
            
            </select>
            @endif
           </select>
              </div>
            </div>

            <hr class="mx-n3">
            <div class="row align-items-center py-2">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Order status</h6>

              </div>
              <div class="col-md-9 pe-5">

              
              <select name="order_status" id="order_status" class="form-select form-select-md">
            <option value="{{$orders->order_status}}">{{$orders->order_status}}</option>   

              
               <option value="Pending">Pending</option>
               <option value="Accepted">Accepted</option>
               <option value="Rejected">Rejected</option>


              
           </select>
              </div>
            </div>

        </div>


      </div>
    </div>
  </div>
</section>
<br>
<button type="submit" class="btn btn-primary" style="float:right;margin-right:55px;">Update</button>

        <a href="{{route('admin.order.show')}}"style="float:right;margin-top:8px;font-size: 18px;margin-right:15px;text-decoration: none;"><b>Cancel </b></a>
</form>
<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->


    @endsection
</x-admin-master>