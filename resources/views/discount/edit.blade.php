<x-admin-master>
    @section('content')

    <h3>Update Discount Code:{{$discounts->code}}</h3>
    <form method="post" action="{{route('discount.update',$discounts->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" area-describedby="" 
            placeholder="Enter name"
            value="{{$discounts->name}}">
           
        </div>
        <div class="form-group">
            <label for="code">Code</label>
            <input type="text" name="code" class="form-control" id="code" area-describedby="" 
            placeholder="Enter code"
            value="{{$discounts->code}}">
        </div>
        <div class="form-group">
        <label for="discount_type">Discount Type</label>
            <div class="form-group">
            <select name="discount_type" id="discount_type" class="form-control formselect required">
            <option value="{{$discounts->discount_type}}">{{$discounts->discount_type}}</option>   
               <option value="Fixed">Fixed</option>
               <option value="Percentage">Percentage</option>
           </select>
           
                
                
            </div>
        </div>  
        <div class="form-group">
            <label for="phone_code">Amount</label>
            <input type="text" name="amount" class="form-control" id="amount" area-describedby="" 
            placeholder="Enter amount"
            value="{{$discounts->amount}}">
        </div>
        <div class="form-group">
            <label for="min">Minimum Purchase Amount</label>
            <input type="number" name="min" class="form-control" id="min" area-describedby="" 
            placeholder="Enter Minimum Purchase Amount"
            value="{{$discounts->min_percentage_amount}}">
        </div>
        <div class="form-group">
            <label for="date">Starts At </label>
            <input type="date" name="date" class="form-control" id="date" area-describedby="" 
            placeholder="Enter date"
            value="{{$discounts->start_at}}">
        </div>
        <div class="form-group">
            <label for="edate">Ends At</label>
            <input type="date" name="edate" class="form-control" id="edate" area-describedby="" 
            placeholder="Enter date"
            value="{{$discounts->end_at}}">
        </div>
        <div class="form-group">
            <label for="uses">Maximun uses</label>
            <input type="number" name="uses" class="form-control" id="uses" area-describedby="" 
            placeholder="Enter uses"
            value="{{$discounts->max_uses}}">
        </div>
        <div class="form-group">
            <label for="cuses">Maximum uses per Customer </label>
            <input type="number" name="cuses" class="form-control" id="cuses" area-describedby="" 
            placeholder="Enter uses"
            value="{{$discounts->max_uses_per_customer}}">
        </div> 
        <div class="form-group">
            <label for="rest">Restaurant</label>
            <input type="text" name="rest" class="form-control" id="rest" area-describedby="" 
            placeholder="Enter uses"
            value="{{$discounts->restaurant_id}}">
        </div> 
        
        <a href="{{route('admin.show')}}">Cancel</a>
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