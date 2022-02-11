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
<form method="post" action="{{route('admin.cuisine.store')}}" enctype="multipart/form-data" >
@csrf
<section>
  <div class="container_fluid">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-xl-11">

        <h2 class="text-black mb-4" >Create Cuisine</h2>

        <div class="card" style="border-radius: 15px;">
          <div class="card-body">

            <div class="row align-items-center pt-3 pb-2">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Name</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" name="name" id="name" class="form-control form-control-sm" />
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif

              </div>
            </div>

            
        </div>


      </div>
    </div>
  </div>
</section>
<br>
<button type="submit" class="btn btn-primary" style="float:right;margin-right:55px;">Create</button>

        <a href="{{route('admin.cuisine.show')}}"style="float:right;margin-top:8px;font-size: 18px;margin-right:15px;text-decoration: none;"><b>Cancel </b></a>
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