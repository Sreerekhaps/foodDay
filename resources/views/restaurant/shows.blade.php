<x-admin-master>

    @section('content')

    <h1>Restaurants</h1>
   
  
    <div class="card shadow mb-4">
    <div class="card-header py-3">
    <a href="{{route('restaurant.create')}}">  
      <input type="submit" value="Create Restaurant" class="btn btn-primary" style="float:right;"/>  
     </a>
   </div>
   
        
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NAME</th>
                      <th>CITY</th>
                      <th>MINIMUM ORDER VALUE</th>
                      <th>COST FOR TWO PEOPLE</th>
                      <th>DEFAULT PREPERATION TIME</th>
                      <th>IS OPEN</th>
                      <th>ALLOW PICKUP</th>
                      <th>STATUS</th>
                      <th></th>


                      
                    </tr>
                  </thead>
                 
                  <tbody>
                      @foreach($restaurants as $restaurant)
                      <tr>
                          <td>{{$restaurant->name}}</td>

                            <td class="not-active"><a href="{{route('city.view',$restaurant->city->id)}}" style="text-decoration: none;">{{$restaurant->city->name}}</a></td>

                          <td>{{$restaurant->min_order_value}}</td>
                          <td>{{$restaurant->cost_for_two_people}}</td>
                          <td>{{$restaurant->default_preparation_time}}</td>
                          <td>
                           @if($restaurant->is_open ==1) 
                           

                            <i class="fas fa-check-circle" style="color:green"></i>
                          
                           @else
                            <i class="far fa-times-circle" style="color:red"></i>
                           @endif 
                          </td>

                          <td>
                           @if($restaurant->allow_pickup ==1) 

                            <i class="fas fa-check-circle" style="color:green"></i>
                          
                           @else
                            <i class="far fa-times-circle" style="color:red"></i>
                           @endif 
                          </td>
                          <td>{{$restaurant->status}}</td>
                          <td><a href="{{route('restaurant.edit',$restaurant->id)}}" style="float:right;margin-right:10px"><img src="{{asset('image/edit.png')}}" width="20px" alt=""></a>
                          <a href="{{route('restaurant.view',$restaurant->id)}}" style="float:right;margin-right:20px"><img src="{{asset('image/eyee.jpg')}}" width="28px" alt=""></a></td>

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