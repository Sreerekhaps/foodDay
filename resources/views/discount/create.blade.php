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
    <form method="post" action="{{route('discount.store')}}" enctype="multipart/form-data">
        @csrf

  <div class="container_fluid">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-xl-11">

        <h2 class="text-black mb-4" >Create Discount Code</h2>
        <div class="card" style="border-radius: 15px;">
          <div class="card-body">

           
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" area-describedby="" 
            placeholder="Enter name">
            @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
           
        </div>
        <div class="form-group">
            <label for="code">Code</label>
            <input type="text" name="code" class="form-control" id="code" area-describedby="" 
            placeholder="Enter code">
            @if ($errors->has('code'))
                    <span class="text-danger">{{ $errors->first('code') }}</span>
                @endif
        </div>
        <div class="form-group">
        <label for="discount_type">Discount Type</label>

            <div class="form-group">
            <select name="discount_type" id="discount_type" class="form-control formselect required">
                <option value="0" disabled selected>____</option>
               
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
            placeholder="Enter amount">
            @if ($errors->has('amount'))
                    <span class="text-danger">{{ $errors->first('amount') }}</span>
                @endif
        </div>
        <div class="form-group">
            <label for="min">Minimum Purchase Amount</label>
            <input type="number" name="min" class="form-control" id="min" area-describedby="" 
            placeholder="Enter Minimum Purchase Amount">
            @if ($errors->has('min'))
                    <span class="text-danger">{{ $errors->first('min') }}</span>
                @endif
        </div>
        <div class="form-group">
            <label for="date">Starts At </label>
            <input type="date" name="date" class="form-control" id="date" area-describedby="" 
            placeholder="Enter date">
            @if ($errors->has('date'))
                    <span class="text-danger">{{ $errors->first('date') }}</span>
                @endif
        </div>
        <div class="form-group">
            <label for="edate">Ends At</label>
            <input type="date" name="edate" class="form-control" id="edate" area-describedby="" 
            placeholder="Enter date">
            @if ($errors->has('edate'))
                    <span class="text-danger">{{ $errors->first('edate') }}</span>
                @endif
        </div>
        <div class="form-group">
            <label for="uses">Maximun uses</label>
            <input type="number" name="uses" class="form-control" id="uses" area-describedby="" 
            placeholder="Enter uses">
            @if ($errors->has('uses'))
                    <span class="text-danger">{{ $errors->first('uses') }}</span>
                @endif
        </div>
        <div class="form-group">
            <label for="cuses">Maximum uses per Customer </label>
            <input type="number" name="cuses" class="form-control" id="cuses" area-describedby="" 
            placeholder="Enter uses">
            @if ($errors->has('cuses'))
                    <span class="text-danger">{{ $errors->first('cuses') }}</span>
                @endif
        </div> 
        
        <div class="form-group">
            <label for="rest">Restaurant</label>
            <select name="rest" id="rest" class="form-control formselect required">
                <option value="0" disabled selected>___</option>
               @foreach($restaurants as $restaurant)
               <option value="{{ $restaurant->id}}">{{($restaurant->name)}}</option>
               
               @endforeach
               
           </select>
           @if ($errors->has('rest'))
                    <span class="text-danger">{{ $errors->first('rest') }}</span>
                @endif
           
        </div> 
</div>
</div>

</section>
        <a href="{{route('discount.show')}}">Cancel</a>
        <button type="submit" class="btn btn-primary">Submit</button>
        
        
    </form>

   
    @endsection
   
</x-admin-master>