<x-admin-master>
    @section('content')

    <h3>Update City:{{$cities->name}}</h3>
    <form method="post" action="{{route('city.update',$cities->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" area-describedby="" 
            placeholder="Enter name"
            value="{{$cities->name}}">
        </div>
        <a href="{{route('city.show')}}">Cancel </a>
        
        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

    @endsection
</x-admin-master>