<x-admin-master>
    @section('content')

    <h1>Cuisines</h1>
    
   
    <div class="card shadow mb-4">
    <div class="card-header py-3">
    <a href="{{route('cuisine.create')}}">  
      <input type="submit" value="Create Cuisine" class="btn btn-primary" style="float:right;"/>  
     </a>
     </div>
          
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>Name</th>
          
                    </tr>
                  </tfoot>
                  <tbody>
                      @foreach($cuisines as $cuisine)
                      <tr>
                          <td>{{$cuisine->name}} 
                          <a href="{{route('cuisine.edit',$cuisine->id)}}" style="float:right;margin-right:10px"><img src="{{asset('image/edit.png')}}" width="20px" alt=""></a>
                          <a href="{{route('cuisine.view',$cuisine->id)}}" style="float:right;margin-right:20px"><img src="{{asset('image/eyee.jpg')}}" width="28px" alt=""></a></td>


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