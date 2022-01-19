<x-admin-master>
    @section('content')

    <h2>Create User</h2>
    <form method="post" action="{{route('admin.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" class="form-control" id="first_name" area-describedby="" 
            placeholder="Enter name">
           
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" class="form-control" id="last_name" area-describedby="" 
            placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="phone_code">Phone code</label>
            <input type="text" name="phone_code" class="form-control" id="phone_code" area-describedby="" 
            placeholder="Enter Phone code">
        </div>
        <div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="text" name="mobile" class="form-control" id="mobile" area-describedby="" 
            placeholder="Enter mobile">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" id="email" area-describedby="" 
            placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" name="password" class="form-control" id="password" area-describedby="" 
            placeholder="Enter password">
        </div>
        
        <a href="{{route('admin.show')}}">Cancel</a>
        <!-- <button type="submit" class="btn btn-primary" href="{{route('admin.create')}}">Create and Add another</button> -->
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