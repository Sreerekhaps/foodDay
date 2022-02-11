<x-admin-master>
    @section('content')

    <h3>User details:{{$customers->first_name}}</h3><br>
    
    <div class="card shadow mb-4">
    <a href="{{route('admin.customer.edit',$customers->id)}}">  
      <input type="submit" value="Edit" class="btn btn-primary" style="float:right;"/>  
     </a>
    <form method="post" action="" enctype="multipart/form-data">
        @csrf
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr>
        <tr>
            
            <td><label for="id" style="margin-left:20px;"><h5>ID:</h5></label></td>
            <td><h5>{{$customers->id}}</h5></td>
        </tr>
        <tr>
            <td><label for="id"  style="margin-left:20px;"><h5>Name:</h5></label></td>
            <td><h5>{{$customers->first_name}} {{$customers->last_name}}</h5></td>
        </tr>
        <tr>
            <td><label for="id"  style="margin-left:20px;"><h5>Mobile:</h5></label></td>
            <td><h5>{{$customers->mobile}}</h5></td>
        </tr>
        <tr>
            <td><label for="id"  style="margin-left:20px;"><h5>Email:</h5></label></td>
            <td><h5>{{$customers->email}}</h5></td>
        </tr>
        </tr>
        </table>
        

        
        
        
        
       
    </form>
    </div>

   
    @endsection
</x-admin-master>