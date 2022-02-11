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
<form method="post" action="{{route('admin.discount.update',$discounts->id)}}" enctype="multipart/form-data" >
@csrf
@method('PATCH')
<section>
  <div class="container_fluid">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-xl-11">

        <h3 class="text-black mb-4" >Update Discount Code:{{$discounts->code}}</h3>

        <div class="card" style="border-radius: 15px;">
          <div class="card-body">

            <div class="row align-items-center pt-3 pb-2">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Name</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" name="name" id="name" class="form-control form-control-sm" value="{{$discounts->name}}" />
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif

              </div>
            </div>

            <hr class="mx-n3">
            <div class="row align-items-center py-2">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Code</h6>

              </div>
              <div class="col-md-9 pe-5">

              <input type="text" name="code" id="code" class="form-control form-control-sm" value="{{$discounts->code}}" />
              @if ($errors->has('code'))
                    <span class="text-danger">{{ $errors->first('code') }}</span>
                @endif

              </div>
            </div>

            <hr class="mx-n3">
            <div class="row align-items-center py-2">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Discount Type</h6>

              </div>
              <div class="col-md-9 pe-5">

              <select name="discount_type" id="discount_type" class="form-select form-select-md">
            <option value="{{$discounts->discount_type}}">{{$discounts->discount_type}}</option>   
               <option value="Fixed">Fixed</option>
               <option value="Percentage">Percentage</option>
           </select>
           @if ($errors->has('discount_type'))
                    <span class="text-danger">{{ $errors->first('discount_type') }}</span>
                @endif
              </div>
            </div>

            <hr class="mx-n3">
            <div class="row align-items-center py-2">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Amount</h6>

              </div>
              <div class="col-md-9 pe-5">

              <input type="text" name="amount" id="amount" class="form-control form-control-sm" value="{{$discounts->amount}}"/>
              @if ($errors->has('amount'))
                    <span class="text-danger">{{ $errors->first('amount') }}</span>
                @endif

              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center py-2">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Minimum Purchase Amount</h6>

              </div>
              <div class="col-md-9 pe-5">

              <input type="number" name="min_percentage_amount" id="min_percentage_amount" class="form-control form-control-sm" value="{{$discounts->min_percentage_amount}}"/>
              @if ($errors->has('min_percentage_amount'))
                    <span class="text-danger">{{ $errors->first('min_percentage_amount') }}</span>
                @endif

              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center py-2">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Starts At</h6>

              </div>
              <div class="col-md-9 pe-5">

              <input type="date" name="start_at" id="start_at" class="form-control form-control-sm" value="{{$discounts->start_at}}"/>
              @if ($errors->has('start_at'))
                    <span class="text-danger">{{ $errors->first('start_at') }}</span>
                @endif

              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center py-2">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Ends At</h6>

              </div>
              <div class="col-md-9 pe-5">

              <input type="date" name="end_at" id="end_at" class="form-control form-control-sm"  value="{{$discounts->end_at}}"/>
              @if ($errors->has('end_at'))
                    <span class="text-danger">{{ $errors->first('end_at') }}</span>
                @endif

              </div>
            </div>
            
            <hr class="mx-n3">

            <div class="row align-items-center py-2">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Maximum Users</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="number" name="max_uses" id="max_uses" class="form-control form-control-sm" placeholder="" value="{{$discounts->max_uses}}"/>
                @if ($errors->has('max_uses'))
                    <span class="text-danger">{{ $errors->first('max_uses') }}</span>
                @endif

              </div>
            </div>

            <hr class="mx-n3">
            <div class="row align-items-center py-2">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Maximum uses per Customer</h6>

              </div>
              <div class="col-md-9 pe-5">

              <input type="number" name="max_uses_per_customer" id="max_uses_per_customer" class="form-control form-control-sm" value="{{$discounts->max_uses_per_customer}}"/>
              @if ($errors->has('max_uses_per_customer'))
                    <span class="text-danger">{{ $errors->first('max_uses_per_customer') }}</span>
                @endif

              </div>
            </div>

            <hr class="mx-n3">

                    <div class="row align-items-center pt-3 pb-2">

                    <div class="col-md-3 ps-5">
                      <h6 class="mb-0"> Restaurants</h6>
                      </div>
                      <div class="col-md-9 pe-5">
                  <select id="selectall-tag" class=" form-control categories" name="restaurant[]" multiple="multiple">
                   
                   @foreach($restaurants as $restaurant)
                   @if($discounts->restaurants->contains($restaurant->id)) 
                   <option value="{{$restaurant->id}}" selected='selected'>{{$restaurant->name}}</option>
                   @endif
                   @if($discounts->restaurants->contains($restaurant->id)!=$restaurant->id)
                   <option value="{{$restaurant->id}}">{{$restaurant->name}}</option>
                   @endif
                   @endforeach
                   </select>
                    
         
         

                @if ($errors->has('restaurant'))
                    <span class="text-danger">{{ $errors->first('restaurant') }}</span>
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

<a href="{{route('admin.discount.show')}}"style="float:right;margin-top:8px;font-size: 18px;margin-right:15px;text-decoration: none;"><b>Cancel </b></a>
</form>



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