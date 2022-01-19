
<x-admin-master>
    @section('content')

    <h1>Orders</h1>
    
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
                      <th>EDIT</th>
                      <th>VIEW</th>
                      
                      
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
                      <th>EDIT</th>
                      <th>VIEW</th>

                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($orders as $order)
                      <tr>
                          <td>{{$order->id}}</td>
                          <td>{{$order->restaurant_id}}</td>
                          <td>{{$order->customer}}</td>
                          <td>{{$order->mobile}}</td>
                          <td>{{$order->order_type}}</td>
                          <td>{{$order->order_status}}</td>
                          <td>{{$order->payment_status}}</td>
                          <td>{{$order->grand_total}}</td>
                          <td>{{$order->order_date}}</td>
                          <td><a href="{{route('order.edit',$order->id)}}" ><button class="btn btn-primary">Edit</button></a></td>
                          <td><a href="{{route('order.view',$order->id)}}" ><button class="btn btn-primary">View</button></a></td>


                          
                      </tr>
                      @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>

    @endsection

    @section('scripts')

    <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('js/demo/datatables-demo.js')}}"></script>


    @endsection
</x-admin-master>