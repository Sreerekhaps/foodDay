<x-admin-master>
    @section('content')
    @section('content')
   
   @if(Session::has('success'))
       <div class="alert alert-success">
           {{ Session::get('success') }}
           @php
               Session::forget('success');
           @endphp
       </div>
       @endif
   
    <form method="post" action="{{route('discount.update',$discounts->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="container_fluid">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-xl-11">

        <h3 class="text-black mb-4" >Update Discount Code:{{$discounts->code}}</h3>
        <div class="card" style="border-radius: 15px;">
          <div class="card-body">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" area-describedby="" 
            placeholder="Enter name"
            value="{{$discounts->name}}">
            @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
           
        </div>
        <div class="form-group">
            <label for="code">Code</label>
            <input type="text" name="code" class="form-control" id="code" area-describedby="" 
            placeholder="Enter code"
            value="{{$discounts->code}}">
            @if ($errors->has('code'))
                    <span class="text-danger">{{ $errors->first('code') }}</span>
                @endif
        </div>
        <div class="form-group">
        <label for="discount_type">Discount Type</label>
            <div class="form-group">
            <select name="discount_type" id="discount_type" class="form-control formselect required">
            <option value="{{$discounts->discount_type}}">{{$discounts->discount_type}}</option>   
               <option value="Fixed">Fixed</option>
               <option value="Percentage">Percentage</option>
           </select>
           @if ($errors->has('discount_type'))
                    <span class="text-danger">{{ $errors->first('discount_type') }}</span>
                @endif
                
                
            </div>
        </div>  
        <div class="form-group">
            <label for="phone_code">Amount</label>
            <input type="text" name="amount" class="form-control" id="amount" area-describedby="" 
            placeholder="Enter amount"
            value="{{$discounts->amount}}">
            @if ($errors->has('amount'))
                    <span class="text-danger">{{ $errors->first('amount') }}</span>
                @endif
        </div>
        <div class="form-group">
            <label for="min">Minimum Purchase Amount</label>
            <input type="number" name="min" class="form-control" id="min" area-describedby="" 
            placeholder="Enter Minimum Purchase Amount"
            value="{{$discounts->min_percentage_amount}}">
            @if ($errors->has('min'))
                    <span class="text-danger">{{ $errors->first('min') }}</span>
                @endif
        </div>
        <div class="form-group">
            <label for="date">Starts At </label>
            <input type="date" name="date" class="form-control" id="date" area-describedby="" 
            placeholder="Enter date"
            value="{{$discounts->start_at}}">
            @if ($errors->has('date'))
                    <span class="text-danger">{{ $errors->first('date') }}</span>
                @endif
        </div>
        <div class="form-group">
            <label for="edate">Ends At</label>
            <input type="date" name="edate" class="form-control" id="edate" area-describedby="" 
            placeholder="Enter date"
            value="{{$discounts->end_at}}">
            @if ($errors->has('edate'))
                    <span class="text-danger">{{ $errors->first('edate') }}</span>
                @endif
        </div>
        <div class="form-group">
            <label for="uses">Maximun uses</label>
            <input type="number" name="uses" class="form-control" id="uses" area-describedby="" 
            placeholder="Enter uses"
            value="{{$discounts->max_uses}}">
            @if ($errors->has('uses'))
                    <span class="text-danger">{{ $errors->first('uses') }}</span>
                @endif
        </div>
        <div class="form-group">
            <label for="cuses">Maximum uses per Customer </label>
            <input type="number" name="cuses" class="form-control" id="cuses" area-describedby="" 
            placeholder="Enter uses"
            value="{{$discounts->max_uses_per_customer}}">
            @if ($errors->has('cuses'))
                    <span class="text-danger">{{ $errors->first('cuses') }}</span>
                @endif
        </div> 
        <div class="form-group">
            <label for="rest">Restaurant</label>
            <input type="text" name="rest" class="form-control" id="rest" area-describedby="" 
            placeholder="Enter uses"
            value="{{$discounts->restaurant_id}}">
            @if ($errors->has('rest'))
                    <span class="text-danger">{{ $errors->first('rest') }}</span>
                @endif
           
        </div> 
</div>
</div>
</section>  
        <button type="submit" class="btn btn-primary" style="float:right;">Update</button>

        <a href="{{route('discount.show')}}"style="float:right;margin-top:8px;font-size: 18px;margin-right:15px;text-decoration: none;"><b>Cancel </b></a>
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