
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
                    <th>NAME</th>
                      <th>CODE</th>
                      <th>DISCOUNT TYPE</th>
                      <th>AMOUNT</th>
                      <th>STARTS AT</th>
                      <th>ENDS AT </th>
                      <th></th>
                      <th></th>

                     
                    </tr>
                  </thead>
                 
                  <tbody>
                  @foreach($discounts as $discount)
                      <tr>
                          <td>{{$discount->name}}</td>
                          <td>{{$discount->code}}</td>
                          <td>{{$discount->discount_type}}</td>
                          <td>{{$discount->amount}}</td>
                          <td>{{$discount->start_at}}</td>
                          <td>{{$discount->end_at}}</td>
                          <td>
                          <a href="{{route('discount.view',$discount->id)}}"><img src="{{asset('image/eyee.jpg')}}" width="28px" alt=""></a>
                          <a href="{{route('discount.edit',$discount->id)}}"><img src="{{asset('image/edit.png')}}" width="20px" alt=""></a><td>
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