<x-admin-master>
@section('styles')
    @parent
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@stop
    @section('content')
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif
<form method="post" action="{{route('restaurant.update',$restaurants->id)}}" enctype="multipart/form-data" >
@csrf
@method('PATCH')
<section>
  <div class="container_fluid">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-xl-11">

        <h2 class="text-black mb-4" >Update Restaurant:{{$restaurants->name}}</h2>

        <div class="card" style="border-radius: 15px;">
          <div class="card-body">

            <div class="row align-items-center pt-3 pb-2">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Name</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" name="name" id="name" class="form-control form-control-sm" value="{{$restaurants->name}}"/>
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif

              </div>
            </div>

            <hr class="mx-n3">
            <div class="row align-items-center py-2">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">About</h6>

              </div>
              <div class="col-md-9 pe-5">

              
            <textarea name="about" id="about" cols="106" rows="4">{{$restaurants->about}}</textarea>
              @if ($errors->has('about'))
                    <span class="text-danger">{{ $errors->first('about') }}</span>
                @endif

              </div>
            </div>

            <hr class="mx-n3">
            <div class="row align-items-center py-2">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Address</h6>

              </div>
              <div class="col-md-9 pe-5">

              <textarea name="address" id="address" cols="106" rows="4">{{$restaurants->address}}</textarea>
           @if ($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                @endif
              </div>
            </div>

            <hr class="mx-n3">
            <div class="row align-items-center py-2">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Mobile</h6>

              </div>
              <div class="col-md-9 pe-5">

              <input type="number" name="mobile" id="mobile" class="form-control form-control-sm" value="{{$restaurants->mobile}}"/>
              @if ($errors->has('mobile'))
                    <span class="text-danger">{{ $errors->first('mobile') }}</span>
                @endif

              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center py-2">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">City</h6>

              </div>
              <div class="col-md-9 pe-5">

              <select name="city" id="city" class="form-select form-select-md">
            <option value="{{$restaurants->city->id}}">{{$restaurants->city->name}}</option>
               @foreach($cities as $city)
                @if($city->name != $restaurants->city->name)
               <option value="{{ $city->id}}">{{($city->name)}}</option>
                @endif
               @endforeach
           </select>
           @if ($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                @endif 
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center py-2">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Location</h6>

              </div>
              <div class="col-md-9 pe-5">

              <input type="text" name="location" id="location" class="form-control form-control-sm" value="{{$restaurants->location}}"/>
              @if ($errors->has('location'))
                    <span class="text-danger">{{ $errors->first('location') }}</span>
                @endif

              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center py-2">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Logo</h6>

              </div>
              <div class="col-md-9 pe-5">
              <img src="{{$restaurants->logo}}" alt="" height="100px" width="200px">
              <input type="file" name="logo" class="form-control-file" id="logo">           

              </div>
            </div>
            
            <hr class="mx-n3">

            <div class="row align-items-center py-2">
              <div class="col-md-3 ps-5">
                
                <h6 class="mb-0">Banner</h6>

              </div>
              <div class="col-md-9 pe-5">
              <img src="{{$restaurants->banner}}" alt="" height="100px" width="200px">
              <input type="file" name="banner" class="form-control-file" id="banner">        

              </div>
            </div>

            <hr class="mx-n3">
            <div class="row align-items-center py-2">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Minimum order value</h6>

              </div>
              <div class="col-md-9 pe-5">

              <input type="number" name="min_order_value" id="min_order_value" class="form-control form-control-sm" value="{{$restaurants->min_order_value}}"/>
              @if ($errors->has('min_order_value'))
                    <span class="text-danger">{{ $errors->first('min_order_value') }}</span>
                @endif

              </div>
            </div>

            <hr class="mx-n3">

                    <div class="row align-items-center pt-3 pb-2">

                    <div class="col-md-3 ps-5">
                      <h6 class="mb-0"> Cost for two people</h6>
                      </div>
                      <div class="col-md-9 pe-5">
                      <input type="number" name="cost_for_two_people" id="cost_for_two_people" class="form-control form-control-sm"  value="{{$restaurants->cost_for_two_people}}"/>
              @if ($errors->has('cost_for_two_people'))
                    <span class="text-danger">{{ $errors->first('cost_for_two_people') }}</span>
                @endif
           
                    </div> 

                    </div>
                    <hr class="mx-n3">

                    <div class="row align-items-center pt-3 pb-2">

                    <div class="col-md-3 ps-5">
                    <h6 class="mb-0"> Default preparation time</h6>
                    </div>
                    <div class="col-md-9 pe-5">
                    <input type="number" name="default_preparation_time" id="default_preparation_time" class="form-control form-control-sm" value="{{$restaurants->default_preparation_time}}"/>
                    @if ($errors->has('default_preparation_time'))
                    <span class="text-danger">{{ $errors->first('default_preparation_time') }}</span>
                    @endif

                    </div> 

                    </div>  
                    
                    <hr class="mx-n3">

                    <div class="row align-items-center pt-3 pb-2">

                    <div class="col-md-3 ps-5">
                    <h6 class="mb-0">Cuisine</h6>
                    </div>
                    <div class="col-md-9 pe-5">
                     
                    <select id="selectall-tag" class=" form-control categories" name="cuisine[]" multiple="multiple">
                   
                      @foreach($cuisines as $cuisine)
                      @if($restaurants->cuisines->contains($cuisine->id)) 
                      <option value="{{$cuisine->id}}" selected='selected'>{{$cuisine->name}}</option>
                      @endif
                      @if($restaurants->cuisines->contains($cuisine->id)!=$cuisine->id)
                      <option value="{{$cuisine->id}}">{{$cuisine->name}}</option>
                      @endif
                      @endforeach
                      </select>
                    @if ($errors->has('cuisine'))
                              <span class="text-danger">{{ $errors->first('cuisine') }}</span>
                          @endif
                    </div> 

                    </div>  
                    <hr class="mx-n3">

                    <div class="row align-items-center pt-3 pb-2">

                    <div class="col-md-3 ps-5">
                    <h6 class="mb-0"> Is open</h6>
                    </div>
                    <div class="col-md-9 pe-5">
                    <input type="checkbox" name="is_open" id="is_open" value="{{$restaurants->is_open}}" {{ $restaurants->is_open=="1"? 'checked':'' }}>                    <!-- @if ($errors->has('time'))
                    <span class="text-danger">{{ $errors->first('time') }}</span>
                    @endif -->

                    </div> 

                    </div>  
                    <hr class="mx-n3">

                    <div class="row align-items-center pt-3 pb-2">

                    <div class="col-md-3 ps-5">
                    <h6 class="mb-0">Allow Pickup</h6>
                    </div>
                    <div class="col-md-9 pe-5">
                    <input type="checkbox" name="allow_pickup" id="allow_pickup" value="{{$restaurants->allow_pickup}}" {{ $restaurants->allow_pickup=="1"? 'checked':'' }}>                    @if ($errors->has('time'))
                    <span class="text-danger">{{ $errors->first('time') }}</span>
                    @endif

                    </div> 

                    </div> 
                    <hr class="mx-n3">



                    <div class="row align-items-center pt-3 pb-2">



                    <div class="col-md-3 ps-5">

                    <h6 class="mb-0">Status </h6>

                    </div>

                    <div class="col-md-9 pe-5">

                    <select name="status" class="form-control form-control-sm" id="status" aria-describedby="">

                    <option value="" disabled>Choose an Option</option>

                    <option {{ old('status',$restaurants->status) == 'active'? 'selected':'' }} value="Active">Active</option>

                    <option {{ old('status',$restaurants->status) == 'blocked'? 'selected':'' }} value="blocked">Blocked</option>

                    </select>






                  </div>
            </div>
     


            
        </div>


      </div>
    </div>
  </div>
</section>
<br>
<button type="submit" class="btn btn-primary" style="float:right;margin-right:55px;">Update</button>

        <a href="{{route('restaurant.show')}}"style="float:right;margin-top:8px;font-size: 18px;margin-right:15px;text-decoration: none;"><b>Cancel </b></a>
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
    @section('javascript')
    @parent
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <script>
    $(document).ready(function() {
    $('.categories').select2();
});
  </script>
@stop
</x-admin-master>