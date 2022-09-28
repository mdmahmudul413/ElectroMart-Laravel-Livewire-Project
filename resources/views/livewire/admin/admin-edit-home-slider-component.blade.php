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
                                Edit Slide
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.homeslider') }}" class="btn btn-success pull-right">All Slides</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="" class="form-horizontal" wire:submit.prevent="updateSlide">
                            <div class="form-group">
                                <label for="title" class="col-md-4 control-label">
                                    Title
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Enter Slide Title" id="title" wire:model="title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subtitle" class="col-md-4 control-label">
                                    Subtitle
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Enter Slide Subtitle" id="subtitle" wire:model="subtitle">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="price" class="col-md-4 control-label">
                                    Price
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Enter Price" id="price" wire:model="price">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="link" class="col-md-4 control-label">
                                    Link
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Enter Link" id="link" wire:model="link">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="image" class="col-md-4 control-label">
                                    Image
                                </label>
                                <div class="col-md-4">
                                    <input type="file" class="form-control input-file" id="image" wire:model="newimage">
                                </div>
                                @if ($newimage)
                                    <div class="col-md-8 pull-right">
                                        <img style="border: 2px solid black; margin-top: 15px;" src="{{ $newimage->temporaryUrl() }}" width="240">
                                    </div>
                                @else
                                    <div class="col-md-8 pull-right">
                                        <img style="border: 2px solid black; margin-top: 15px;" src="{{ asset('assets/images/sliders') }}/{{ $image }}" width="240">
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="status" class="col-md-4 control-label">
                                    Status
                                </label>
                                <div class="col-md-4">
                                    <select name="" id="status" class="form-control" wire:model="status">
                                        <option value="0">Inactive</option>
                                        <option value="1">Active</option>
                                    </select>
                                </div>
                            </div>
                            

                            <div class="form-group">
                                <label for="categoryname" class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button class="btn btn-primary" type="submit">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
