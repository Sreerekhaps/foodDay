<x-admin-master>
    @section('content')

    <h3>User details:{{$users->first_name}}</h3><br>
    
    <div class="card shadow mb-4">
    <a href="{{route('admin.edit',$users->id)}}">  
      <input type="submit" value="Edit" class="btn btn-primary" style="float:right;"/>  
     </a>
    <form method="post" action="" enctype="multipart/form-data">
        @csrf
        <table>
        <tr>
            
            <td><label for="id"><h5>ID:</h5></label></td>
            <td style="float:right;"><h5>{{$users->id}}</h5></td>
        </tr>
        <tr>
            <td><label for="id"><h5>Name:</h5></label></td>
            <td style="float:right;"><h5>{{$users->first_name}} {{$users->last_name}}</h5></td>
        </tr>
        <tr>
            <td><label for="id"><h5>Mobile:</h5></label></td>
            <td style="float:right;"><h5>{{$users->mobile}}</h5></td>
        </tr>
        <tr>
            <td><label for="id"><h5>Email:</h5></label></td>
            <td style="float:right;"><h5>{{$users->email}}</h5></td>
        </tr>
        </table>
        

        
        
        
        
       
    </form>
    </div>

   
    @endsection
</x-admin-master>