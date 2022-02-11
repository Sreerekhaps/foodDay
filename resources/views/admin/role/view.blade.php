<x-admin-master>
    @section('content')

    <h3>Role details:{{$roles->name}}</h3><br>
    <div class="card shadow mb-4">
    <a href="{{route('admin.role.edit',$roles->id)}}">  
      <input type="submit" value="Edit" class="btn btn-primary" style="float:right;"/>  
     </a>
    <form method="post" action="" enctype="multipart/form-data">
        @csrf
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tbody>

        <tr>
            <td><label for="id" style="margin-left:20px"><h5>ID:</h5></label></td>
            <td><h5>{{$roles->id}}</h5></td>
        </tr>
        <tr>
            <td><label for="name" style="margin-left:20px"><h5>Name:</h5></label></td>
            <td><h5>{{$roles->name}}</h5></td>
        </tr>
        <tr>
            <td><label for="gname" style="margin-left:20px"><h5>Guard Name:</h5></label></td>
            <td><h5>{{$roles->guard_name}}</h5></td>
        </tr>
        <tr>
            <td><label for="created" style="margin-left:20px"><h5>Created At:</h5></label></td>
            <td><h5>{{$roles->created_at}}</h5></td>
        </tr>
        <tr>
            <td><label for="updated" style="margin-left:20px"><h5>Updated At:</h5></label></td>
            <td><h5>{{$roles->updated_at}}</h5></td>
        </tr>
        <tr>
            <div>
            <td><label for="permission" style="margin-left:20px"><h5>Permission:</h5></label></td>
            <td>
            @foreach($permissions as $permission)
                           @if($roles->permissions->contains($permission->id) =='checked') 

                            <i class="fas fa-check-circle" style="color:green">{{$permission->name}}</i><br>
                          
                           @else
                            <i class="far fa-times-circle" style="color:red"> {{$permission->name}}</i><br>
                           @endif 
                          
            @endforeach  
            </td> 
</div>           
        </tr>
        
</tbody>

        </table>
            
       
    </form>
    </div>

   
    @endsection
</x-admin-master>