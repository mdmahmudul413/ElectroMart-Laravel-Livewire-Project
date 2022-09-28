<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has('password_success'))
                    <div class="alert alert-success" role="alert">{{ Session::get('password_success') }}</div>
                @endif
                @if (session()->has('password_error'))
                    <div class="alert alert-danger" role="alert">{{ Session::get('password_error') }}</div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">
                            Change Password
                    </div>
                    <div class="panel-body">
                        <form action="" class="form-horizontal" wire:submit.prevent="changePassword">
                            <div class="form-group">
                                <label for="cpassword" class="col-md-4 control-label">
                                    Current Password
                                </label>
                                <div class="col-md-4">
                                    <input type="password" class="form-control input-md" placeholder="Current Password" id="cpassword" name="current_password" wire:model="current_password">
                                    @error('current_password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="npassword" class="col-md-4 control-label">
                                    New Password
                                </label>
                                <div class="col-md-4">
                                    <input type="password" class="form-control input-md" placeholder="New Password" id="npassword" name="password" wire:model="password">
                                    @error('password')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="conpassword" class="col-md-4 control-label">
                                    Confirme Password
                                </label>
                                <div class="col-md-4">
                                    <input type="password" class="form-control input-md" placeholder="Confirm Password" id="conpassword" name="password_confirmation" wire:model="password_confirmation">
                                    @error('password_confirmation')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="categoryname" class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
