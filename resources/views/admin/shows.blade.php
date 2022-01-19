<x-admin-master>
    @section('content')

    <h1>Users</h1>
    
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <a href="{{route('admin.create')}}">  
      <input type="submit" value="Create User" class="btn btn-primary" style="float:right;"/>  
     </a></div>
    
    
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Mobile</th>
                      <th>Email</th>
                      <th>Edit</th>
                      <th>View</th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>Name</th>
                      <th>Mobile</th>
                      <th>Email</th>
                      <th>Edit</th>
                      <th>View</th>
                    </tr>
                  </tfoot>
                  <tbody>
                      @foreach($users as $user)
                      <tr>
                          <td>{{$user->first_name}} {{$user->last_name}}</td>
                          <td>{{$user->mobile}}</td>
                          <td>{{$user->email}}</td>
                          <td><a href="{{route('admin.edit',$user->id)}}" ><button class="btn btn-primary">Edit</button></a></td>
                          <td><a href="{{route('admin.view',$user->id)}}" ><button class="btn btn-primary">View</button></a></td>
                          
                          
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