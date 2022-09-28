<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has('message'))
                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Add New Attribute
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.attributes') }}" class="btn btn-success pull-right">All Attributes</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="" class="form-horizontal" wire:submit.prevent="storeAttribute">
                            <div class="form-group">
                                <label for="attributename" class="col-md-4 control-label">
                                    Attribute Name
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Enter Attribute Name" id="attributename" wire:model="name">
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
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
