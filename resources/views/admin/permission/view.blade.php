<x-admin-master>
    @section('content')

    <h3>Permission details:{{$permissions->name}}</h3><br>
    <div class="card shadow mb-4">
    <a href="{{route('admin.permission.edit',$permissions->id)}}">  
      <input type="submit" value="Edit" class="btn btn-primary" style="float:right;"/>  
     </a>
    <form method="post" action="" enctype="multipart/form-data">
        @csrf
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tbody>

        <tr>
            <td><label for="id" style="margin-left:20px"><h5>ID:</h5></label></td>
            <td><h5>{{$permissions->id}}</h5></td>
        </tr>
        <tr>
            <td><label for="name" style="margin-left:20px"><h5>Name:</h5></label></td>
            <td><h5>{{$permissions->name}}</h5></td>
        </tr>
        
        <tr>
            <td><label for="gname" style="margin-left:20px"><h5>Guard Name:</h5></label></td>
            <td><h5>{{$permissions->guard_name}}</h5></td>
        </tr>
        <tr>
            <td><label for="created" style="margin-left:20px"><h5>Created At:</h5></label></td>
            <td><h5>{{$permissions->created_at}}</h5></td>
        </tr>
        <tr>
            <td><label for="updated" style="margin-left:20px"><h5>Updated At:</h5></label></td>
            <td><h5>{{$permissions->updated_at}}</h5></td>
        </tr>
        <tr>
            <div>
            <td><label for="role" style="margin-left:20px"><h5>Roles:</h5></label></td>
            <td>
            @foreach($roles as $role)
                           @if($permissions->roles->contains($role->id) =='checked') 

                            <i class="fas fa-check-circle" style="color:green">{{$role->name}}</i><br>
                          
                           @else
                            <i class="far fa-times-circle" style="color:red"> {{$role->name}}</i><br>
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