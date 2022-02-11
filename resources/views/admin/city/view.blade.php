<x-admin-master>
    @section('content')

    <h3>City details:{{$cities->name}}</h3><br>
    <div class="card shadow mb-4">
    <a href="{{route('admin.city.edit',$cities->id)}}">  
      <input type="submit" value="Edit" class="btn btn-primary" style="float:right;"/>  
     </a>
    <form method="post" action="" enctype="multipart/form-data">
        @csrf
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tbody>

        <tr>
            <td><label for="id" style="margin-left:20px"><h5>ID:</h5></label></td>
            <td><h5>{{$cities->id}}</h5></td>
        </tr>
        <tr>
            <td><label for="id" style="margin-left:20px"><h5>Name:</h5></label></td>
            <td><h5>{{$cities->name}}</h5></td>
        </tr>
</tbody>

        </table>
            
       
    </form>
    </div>

   
    @endsection
</x-admin-master>