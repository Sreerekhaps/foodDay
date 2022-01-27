<x-admin-master>
    @section('content')

    <h1>Cities</h1>
    
   
    <div class="card shadow mb-4">
    <div class="card-header py-3">
    <a href="{{route('city.create')}}">  
      <input type="submit" value="Create City" class="btn btn-primary" style="float:right;"/>  
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
                      @foreach($cities as $city)
                      <tr>
                          <td>{{$city->name}}
                          <a href="{{route('city.edit',$city->id)}}" style="float:right;margin-left:20px"><img src="{{asset('image/edit.png')}}" width="20px" alt=""></a>
                          <a href="{{route('city.view',$city->id)}}" style="float:right;margin-left:100px"><img src="{{asset('image/eyee.jpg')}}" width="28px" alt=""></a></td>

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