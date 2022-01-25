
<x-admin-master>
    @section('content')

    <h1>Discount Codes</h1>
    
    <div class="card shadow mb-4">
    <div class="card-header py-3">
    <a href="{{route('discount.create')}}">  
      <input type="submit" value="Create Discount Code" class="btn btn-primary" style="float:right;"/>  
     </a>
     </div>
    
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>Name</th>
                      <th>Code</th>
                      <th>Discount Type</th>
                      <th>Amount</th>
                      <th>Starts At</th>
                      <th>Ends At</th>
                      <th></th>
                      <th></th>

                     
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>Name</th>
                      <th>Code</th>
                      <th>Discount Type</th>
                      <th>Amount</th>
                      <th>Starts At</th>
                      <th>Ends At</th>
                      <th></th>
                      <th></th>




                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($discounts as $discount)
                      <tr>
                          <td>{{$discount->name}}</td>
                          <td>{{$discount->code}}</td>
                          <td>{{$discount->discount_type}}</td>
                          <td>{{$discount->amount}}</td>
                          <td>{{$discount->start_at}}</td>
                          <td>{{$discount->end_at}}</td>
                          <td><a href="{{route('discount.edit',$discount->id)}}" ><img src="{{asset('image/edit.png')}}" width="20px" alt=""></a>
                          <a href="{{route('discount.view',$discount->id)}}" ><img src="{{asset('image/eyee.jpg')}}" width="28px" alt=""></a><td>
                            <form method="post" action="{{route('discount.delete',$discount->id)}}">
                              @csrf
                              @method('DELETE')
                              <a href="/discount/{{$discount->id}}"><img src="{{asset('image/delete.png')}}" width="20px" alt=""></a></td>
                            </form>
                          
                          


                          
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