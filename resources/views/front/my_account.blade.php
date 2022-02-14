@section('content')
 
<div class="tab-pane fade" id="v-pills-account" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab">
                                <div class="my-account-content">
                                    <h4>Account Details</h4>
                                    <form method="post" action="{{route('profile_update',$LoggedUserInfo->id)}}">
                                    @csrf
                                    @method('PATCH')
                                        <div class="form-row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="First Name" value="{{$LoggedUserInfo['first_name']}}">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Last Name" value="{{$LoggedUserInfo['last_name']}}">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Email" value="{{$LoggedUserInfo['email']}}">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Mobile" value="{{$LoggedUserInfo['mobile']}}">
                                                </div>
                                                <div class="form-group  mb-0">
                                                    <button class="btn btn-primary">Save Changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
@endsection('content')