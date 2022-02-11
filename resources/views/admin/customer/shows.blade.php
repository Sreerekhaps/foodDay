<x-admin-master>
    @section('content')

    <h1>Customer</h1>
    
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <a href="{{route('admin.customer.create')}}">  
      <input type="submit" value="Create Customer" class="btn btn-primary" style="float:right;"/>  
     </a></div>
    
    
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NAME</th>
                      <th>MOBILE</th>
                      <th>EMAIL</th>
                      <th></th>
                      
                    </tr>
                  </thead>
                 
                  <tbody>
                      @foreach($customers as $customer)
                      <tr>
                          <td>{{$customer->first_name}} {{$customer->last_name}}</td>
                          <td>{{$customer->mobile}}</td>
                          <td>{{$customer->email}}</td>
                         <td> 
                          <a href="{{route('admin.customer.view',$customer->id)}}" style="margin-right:5px"><img src="{{asset('image/eyee.jpg')}}" width="28px" alt=""></a>
                          <a href="{{route('admin.customer.edit',$customer->id)}}" style="margin-right:-30px"><img src="{{asset('image/edit.png')}}" width="20px" alt=""></a></td>
                          
                          
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