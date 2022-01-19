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
                      <th>Edit</th>
                      <th>View</th>

                      

                     
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>View</th>


                   
                     
                    </tr>
                  </tfoot>
                  <tbody>
                      @foreach($cuisines as $cuisine)
                      <tr>
                          <td>{{$cuisine->name}}</td>
                          <td><a href="{{route('cuisine.edit',$cuisine->id)}}" ><button class="btn btn-primary">Edit</button></a></td>
                          <td><a href="{{route('cuisine.view',$cuisine->id)}}" ><button class="btn btn-primary">View</button></a></td>


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