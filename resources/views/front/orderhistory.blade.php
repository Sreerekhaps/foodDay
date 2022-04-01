<x-my_account-master>
    @section('order_history')

    <div class="tab-pane fade show active" id="v-pills-orders" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <div class="my-account-content">
                                    <h4>Order History</h4>
                                    <form action="{{route('customer.change_password')}}" method="post" class="needs-validation" novalidate enctype="multipart">
                                    @csrf
                                   
                                    <div class="row">
                                   
                                    
                                    
                                        <div class="col-md-12">
                                        @foreach($order as $orderstore) 
                                       @if(Auth::user()->id==$orderstore->customer_id)
                                       
                                            <div class="card order-card">
                                          
                                                <div class="card-body">
                                                    <div class="rest-delivery">
                                                        <h5>{{$orderstore->restaurant->name}}</h5>
                                                        <h6>Delivered on {{$orderstore->order_date}}</h6>
                                                    </div>
                                                    <p class="rest-address">
                                                       
                                                        <i class="bx bx-location-plus"></i> {{$orderstore->restaurant->address}},{{$orderstore->restaurant->location}}
                                                    </p>
                                                    <div class="order-id-time">
                                                        <p>Order #{{$orderstore->id}}</p>
                                                        <p>{{$orderstore->order_date}}</p>
                                                    </div>
                                                    @foreach($itemfoods as $item)
                                                     @if($orderstore->itemfoods->contains($item->id))
                                                        <p class="items">{{$item->food_item}}</p>
                                                     @endif
                                                    @endforeach
                                                    <div class="total-buttons">
                                                        <h5>Total Paid: ${{$orderstore->grand_total}}</h5>
                                                        <div class="button-wrap">
                                                            
                                                            <button type="button" data-toggle="modal"
                                                                class="btn btn-outline-primary btn-sm"
                                                                data-target="#exampleModal2">
                                                                Details</button>
                                                            <button class="btn btn-primary btn-sm"><i
                                                                    class="bx bx-download align-middle mr-1"></i>
                                                                Download</button>
                                                        </div>
                                                    </div>
                                                </div>
                                             
                                            </div>
                                            @endif
                                            @endforeach 
                                           
                                        </div>
                                        
                                       
                                                                   


</div>
</form>

                            </div>
</div>
 <!-- View Orders Modal -->
 <div class="modal fade address-model view-orders-model" id="editModel" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                           
                                <div class="text-center w-100">
                                    <h5 class="modal-title" id="exampleModalLabel">Order #{{$orderstore->id}}</h5>
                                    <h6>September 07 2019, 09:08 AM</h6>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="bx bx-x btn-close"></i>
                                </button>
                            </div>
                            <form action="/customer/orderhistory" method="get" id="editForm">
                            <div class="modal-body">

                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>Order status</td>
                                            <td>Pending</td>
                                        </tr>
                                        <tr>
                                            <td>Total amount</td>
                                            <td>$20.00</td>
                                        </tr>
                                        <tr>
                                            <td>Total discount</td>
                                            <td>$0.00</td>
                                        </tr>
                                        <tr>
                                            <td>Delivery charge</td>
                                            <td>$5.00</td>
                                        </tr>
                                        <tr>
                                            <td>Amount Paid</td>
                                            <td>$25.63</td>
                                        </tr>
                                    </tbody>
                                </table>
                               
                                
                            </div>
                            </form>

                        </div>
                    </div>
                </div>

                <!-- View Orders Modal End -->
    @endsection
</x-my_account-master>