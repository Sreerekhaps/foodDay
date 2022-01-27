
<x-admin-master>
    @section('content')
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel=stylesheet > -->
    <h1>Orders</h1>
    <form>
<input type="text" name="id" value="{{ old('id') }}">
<span class="input-group-btn">
<button class="btn btn-primary" type="submit">Search</button>
</span>
</form>
    <br>
    <div class="card shadow mb-4">
      
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>ID</th>
                      <th>RESTAURANT</th>
                      <th>CUSTOMER</th>
                      <th>MOBILE</th>
                      <th>ORDER TYPE</th>
                      <th>ORDER STATUS</th>
                      <th>PAYMENT STATUS</th>
                      <th>GRAND TOTAL</th>
                      <th>ORDER DATE</th>
                      <th></th>
                      
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>ID</th>
                      <th>RESTAURANT</th>
                      <th>CUSTOMER</th>
                      <th>MOBILE</th>
                      <th>ORDER TYPE</th>
                      <th>ORDER STATUS</th>
                      <th>PAYMENT STATUS</th>
                      <th>GRAND TOTAL</th>
                      <th>ORDER DATE</th>
                      <th></th>

                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($orders as $order)
                      <tr>
                          <td><a href="{{route('order.view',$order->id)}}">{{$order->id}}</a></td>
                          <td><a href="{{route('restaurant.view',$order->restaurant->id)}}">{{$order->restaurant->name}}</a></td>
                          <td>{{$order->customer}}</td>
                          <td>{{$order->mobile}}</td>
                          <td>{{$order->order_type}}</td>
                          <td>{{$order->order_status}}</td>
                          <td>{{$order->payment_status}}</td>
                          <td>{{$order->grand_total}}</td>
                          <td>{{$order->order_date}}</td>
                          <td><a href="{{route('order.edit',$order->id)}}" ><img src="{{asset('image/edit.png')}}" width="20px" alt=""></a>
                          <a href="{{route('order.view',$order->id)}}" ><img src="{{asset('image/eyee.jpg')}}" width="28px" alt=""></a></td>


                          
                      </tr>
                      @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>

    @endsection
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script>
  $(document).ready(function(){
    $('#search').on('keyup',function(){
      var query=$(this).val();
      $ajax({
        url:"search",
        type:"GET",
        data:{'search':query}
        success:function(data){
          $('#search_list').html(data);
        }
      });
    });
  });
</script> -->
    @section('scripts')
  

    <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
  

    @endsection
</x-admin-master>