<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has('message'))
                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Settings
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" wire:submit.prevent="saveSettings">
                            <div class="form-group">
                                <label for="semail" class="col-md-4 control-label">Email</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Email" id="semail" wire:model="email">
                                    @error('email')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sphone" class="col-md-4 control-label">Phone</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Phone" id="sphone" wire:model="phone">
                                    @error('phone')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sphone2" class="col-md-4 control-label">Phone2</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Phone2" id="sphone2" wire:model="phone2">
                                    @error('phone2')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="saddress" class="col-md-4 control-label">Address</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Address" id="saddress" wire:model="address">
                                    @error('address')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="smap" class="col-md-4 control-label">Map</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Map" id="smap" wire:model="map">
                                    @error('map')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="stwitter" class="col-md-4 control-label">Twitter</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Twitter" id="stwitter" wire:model="twitter">
                                    @error('twitter')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sfacebook" class="col-md-4 control-label">Facebook</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Facebook" id="sfacebook" wire:model="facebook">
                                    @error('facebook')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="spinterest" class="col-md-4 control-label">Pinterest</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Pinterest" id="spinterest" wire:model="pinterest">
                                    @error('pinterest')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sinstagram" class="col-md-4 control-label">Instagram</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Instagram" id="sinstagram" wire:model="instagram">
                                    @error('instagram')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="syoutube" class="col-md-4 control-label">Youtube</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Youtube" id="syoutube" wire:model="youtube">
                                    @error('youtube')<p class="text-danger">{{ $message }}</p>@enderror
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
