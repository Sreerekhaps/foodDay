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
<form method="post" action="{{route('admin.driver.update',$drivers->id)}}" enctype="multipart/form-data" >
@csrf
@method('PATCH')
<section>
  <div class="container_fluid">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-xl-11">

        <h3 class="text-black mb-4" >Update driver:{{$drivers->first_name}}</h3>

        <div class="card" style="border-radius: 15px;">
          <div class="card-body">

            <div class="row align-items-center pt-3 pb-2">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">First Name</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" name="first_name" id="first_name" class="form-control form-control-sm" value="{{$drivers->first_name}}"/>
                @if ($errors->has('first_name'))
                    <span class="text-danger">{{ $errors->first('first_name') }}</span>
                @endif

              </div>
            </div>

            <hr class="mx-n3">
            <div class="row align-items-center py-2">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Last Name</h6>

              </div>
              <div class="col-md-9 pe-5">

              <input type="text" name="last_name" id="last_name" class="form-control form-control-sm" value="{{$drivers->last_name}}"/>
              @if ($errors->has('last_name'))
                    <span class="text-danger">{{ $errors->first('last_name') }}</span>
                @endif

              </div>
            </div>


        
            <hr class="mx-n3">
            <div class="row align-items-center py-2">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Mobile</h6>

              </div>
              <div class="col-md-9 pe-5">

              <input type="number" name="mobile" id="mobile" class="form-control form-control-sm" value="{{$drivers->mobile}}"/>
              @if ($errors->has('mobile'))
                    <span class="text-danger">{{ $errors->first('mobile') }}</span>
                @endif

              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center py-2">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Email</h6>

              </div>
              <div class="col-md-9 pe-5">

              <input type="text" name="email" id="email" class="form-control form-control-sm" value="{{$drivers->email}}"/>
              @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif

              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center py-2">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Password</h6>

              </div>
              <div class="col-md-9 pe-5">

              <input type="text" name="password" id="password" class="form-control form-control-sm" value="{{$drivers->password}}"/>
              @if ($errors->has('edate'))
                    <span class="text-danger">{{ $errors->first('edate') }}</span>
                @endif

              </div>
            </div>
            
            
            
        </div>


      </div>
    </div>
  </div>
</section>
<br>
<button type="submit" class="btn btn-primary" style="float:right;margin-right:55px;">Update</button>

        <a href="{{route('admin.driver.show')}}"style="float:right;margin-top:8px;font-size: 18px;margin-right:15px;text-decoration: none;"><b>Cancel </b></a>
</form>
<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->


    @endsection
</x-admin-master>