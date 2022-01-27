<x-admin-master>
    @section('content')
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif
   
    <form method="post" action="{{route('city.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="container_fluid">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-xl-11">

        <h2 class="text-black mb-4" >Create City</h2>
        <div class="card" style="border-radius: 15px;">
          <div class="card-body">
        <div class="form-group">
            <label for="name"> Name</label>
            <input type="text" name="name" class="form-control" id="name" area-describedby="" 
            placeholder="Enter name">
            @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
        </div>
       
        <button type="submit" class="btn btn-primary" style="float:right;">Create</button>
        <a href="{{route('city.show')}}"style="float:right;margin-top:8px;font-size: 18px;margin-right:15px;text-decoration: none;"><b>Cancel </b></a>
        
        
        
        
    </form>

    <!-- @if(count($errors)> 0)

    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

    @endif -->

    @endsection
</x-admin-master>