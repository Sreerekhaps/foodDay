<x-admin-master>
    @section('content')

    <h2>Create Cuisine</h2>
    <form method="post" action="{{route('cuisine.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name"> Name</label>
            <input type="text" name="name" class="form-control" id="name" area-describedby="" 
            placeholder="Enter name">
        </div>
       

        <a href="{{route('city.show')}}">Cancel </a>
        
        
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @if(count($errors)> 0)

    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

    @endif

    @endsection
</x-admin-master>