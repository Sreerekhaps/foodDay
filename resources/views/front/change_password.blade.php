<x-my_account-master>
@section('change_password')
<div class="tab-pane fade show active" id="v-pills-password" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab">
                                <div class="my-account-content">
                                    <h4>Change Password</h4>
                                   <form action="{{route('change_password')}}" method="post" class="needs-validation" novalidate enctype="multipart">
                                    @csrf
                                    

                                       
                                   <div class="form-row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="current_password"
                                                        placeholder="Current Password">
                                                        @if ($errors->has('current_password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current_password') }}</strong>
                                    </span>
                                @endif
                                                        
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="password" placeholder="New Password">
                                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="confirm_password"
                                                        placeholder="Confirm New Password">
                                                        @if ($errors->has('confirm_password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('confirm_password') }}</strong>
                                    </span>
                                @endif
                                                </div>
                                                <div class="form-group  mb-0">
                                                    <button class="btn btn-primary">Save Changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
@endsection('change_password')
</x-my_account-master>