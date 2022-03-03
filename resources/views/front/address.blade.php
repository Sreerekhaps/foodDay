<x-my_account-master>
    @section('address')

    <div class="tab-pane fade show active" id="v-pills-address" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                                <div class="my-account-content food-item-cards-wrap">
                                    <h4>Manage Addresses</h4>
                                    <div class="row">
                                    
                                    @foreach($address as $add)
                                    
                                    <div class="col-md-6">
                                    
                                            <div class="card address-card">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{$add->home}}</h5>
                                                    <h6>{{$add->location}}</h6>
                                                    <p class="card-text">
                                                        {{$add->area}},{{$add->house_name}},{{$add->city}},{{$add->landmark}},
                                                        {{$add->pincode}}
                                                       
                                                    </p>
                                                    <button type="button" value="{{$add->id}}" class="btn-link" data-toggle="modal" id="edit-item">
                                                        <i class='bx bx-edit'></i>Edit</button>
                                                       
                                                    <button class="btn-link"><i class='bx bx-trash'><a href="/address/{{$add->id}}"></i>Delete</a></button>
                                    
                                                    <button class="btn-link"><i class='bx bx-location-plus'></i>Set as
                                                        default</button>
                                                    <!-- <a href="#" class=""><i class='bx bx-trash' ></i>Delete</a> -->
                                                </div>
                                            </div>
              
                                        </div>
                                        @endforeach
                                        <br>
                                        <div>
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModal">Add Address</button>
                                        </div>
                                </div>
                            </div>
    </div>
                             <!-- Address Modal Edit -->
                             <div class="modal fade  " id="edit-modal" tabindex="-1" role="dialog"
                    aria-labelledby="edit-modal-label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="bx bx-x btn-close"></i>
                                </button>
                                <h5 class="mb-4">Edit Delivery Address</h5>


                                <form method="post" action="" enctype="multipart/form-data">
                                <!-- @foreach($address as $addr) -->
                                
                                    <div class="form-row">
                                        @csrf 
                                       @if(Session::get('success'))
                                          <div class="alert alert-success"> 
                                             {{ Session::get('success') }} 
                                           </div>
                                        @endif

                                        <div class="form-group col-lg-12">
                                            <input type="text" name="location" class="form-control" id="location" placeholder="Location" value="{{$addr->area}}">
                                               @error("location")
                                                    <p style="color:red">{{$errors->first("location")}}
                                                @enderror
                                        </div>
                                         <div class="form-group col-lg-12">
                                            <input type="text" name="house_name" class="form-control" id="house_name" placeholder="House Name / Flat / Building" value="{{$addr->house_name}}"> 
                                            @error("house_name")
                                                    <p style="color:red">{{$errors->first("house_name")}}
                                                @enderror
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input type="text" name="area" class="form-control" id="area" placeholder="Area / Street" value="{{$addr->area}}">
                                            @error("area")
                                                    <p style="color:red">{{$errors->first("area")}}
                                                @enderror
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input type="text" name="city" class="form-control" id="city" placeholder="City" value="{{$addr->city}}">
                                            @error("city")
                                                    <p style="color:red">{{$errors->first("city")}}
                                                @enderror
                                        </div>
                                          <div class="form-group col-lg-12">
                                            <input type="text" name="landmark" class="form-control" id="landmark" placeholder="Landmark" value="{{$addr->landmark}}">
                                        </div>
                                       
                                        <div class="form-group col-lg-6">
                                            <input type="text" name="pincode" class="form-control" id="pincode" placeholder="Pincode" value="{{$addr->pincode}}">
                                            @error("pincode")
                                                    <p style="color:red">{{$errors->first("pincode")}}
                                                @enderror
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <select name="home" id="home" class="form-control">
                                            <option value="{{$addr->home}}">{{$addr->home}}</option>   

                                               

                                                <option value="Home">Home</option>

                                                <option value="Office">Office</option>

                                                <option value="Other">Other</option>

                                            </select>    
                                                                   </div>
                                        <div class="form-group col-lg-12">
                                            <textarea class="form-control" name="note" id="exampleFormControlTextarea1" rows="3"
                                                placeholder="Note for Driver">{{$addr->note_a_driver}}</textarea>
                                        </div>

                                        <div class="form-group col-md-6 mb-md-0 d-none d-md-block">
                                            <button type="button" class="btn btn-outline-primary w-100"
                                                data-dismiss="modal" aria-label="Close">Close</button>
                                        </div>
                                        <div class="form-group col-md-6 mb-0">
                                            <button class="btn btn-secondary w-100">Save</button>
                                        </div>

                                    </div>
                                    
                                    <!-- @endforeach -->
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
        <!-- Address Modal End -->
@endsection

@section('edit')
@parent
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>

<script>
 $(document).ready(function() {
/**
* for showing edit item popup
*/

$(document).on('click', "#edit-item", function() {
$(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.

var options = {
'backdrop': 'static'
};
$('#edit-modal').modal(options)
})

// on modal show
$('#edit-modal').on('show.bs.modal', function() {
var el = $(".edit-item-trigger-clicked"); // See how its usefull right here? 
var row = el.closest(".data-row");

// get the data
// var id = el.data('item-id');
// var location = row.children(".location").text();
// var house_name = row.children(".house_name").text();


// fill the data in the input fields
// $("#id").val(id);
// $("#location").val(location);
// $("#house_name").val(house_name);


})

// on modal hide
$('#edit-modal').on('hide.bs.modal', function() {
$('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
$("#edit-form").trigger("reset");
})
})
</script>
@stop
</x-my_account-master>