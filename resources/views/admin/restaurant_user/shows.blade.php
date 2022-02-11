<x-admin-master>
    @section('content')

    <h1>Restaurant User</h1>
    
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <a href="{{route('admin.restaurant_user.create')}}">  
      <input type="submit" value="Create Restaurant User" class="btn btn-primary" style="float:right;"/>  
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
                      @foreach($restaurant_users as $restaurant_user)
                      <tr>
                          <td>{{$restaurant_user->first_name}} {{$restaurant_user->last_name}}</td>
                          <td>{{$restaurant_user->mobile}}</td>
                          <td>{{$restaurant_user->email}}</td>
                         <td> 
                          <a href="{{route('admin.restaurant_user.view',$restaurant_user->id)}}" style="margin-right:5px"><img src="{{asset('image/eyee.jpg')}}" width="28px" alt=""></a>
                          <a href="{{route('admin.restaurant_user.edit',$restaurant_user->id)}}" style="margin-right:-30px"><img src="{{asset('image/edit.png')}}" width="20px" alt=""></a></td>
                          
                          
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