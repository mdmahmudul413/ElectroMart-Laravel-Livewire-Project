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
                                Add New Category
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.categories') }}" class="btn btn-success pull-right">All Categories</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="" class="form-horizontal" wire:submit.prevent="storeCategory">
                            <div class="form-group">
                                <label for="categoryname" class="col-md-4 control-label">
                                    Category Name
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Enter Category Name" id="categoryname" wire:model="name" wire:keyup="generateslug">
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="categoryslug" class="col-md-4 control-label">
                                    Category Slug
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Enter Category Slug" id="categoryslug" wire:model="slug">
                                    @error('slug')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dropdowncategory" class="col-md-4 control-label">Parent Category</label>
                                <div class="col-md-4">
                                    <select name="" id="dropdowncategory" class="form-control input-md"  wire:model="category_id">
                                        <option value="">None</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
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
