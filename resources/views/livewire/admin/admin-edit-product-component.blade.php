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
                                Edit Product
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.products') }}" class="btn btn-success pull-right">All Products</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateProduct">
                            <div class="form-group">
                                <label for="productname" class="col-md-4 control-label">
                                    Product Name
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Enter Product Name" id="productname" wire:model="name" wire:keyup="generateslug">
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="productslug" class="col-md-4 control-label">
                                    Product Slug
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Enter Product Slug" id="productslug" wire:model="slug">
                                    {{-- @error('slug')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror --}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="short_description" class="col-md-4 control-label">
                                    Short Description
                                </label>
                                <div class="col-md-4" wire:ignore>
                                    <textarea class="form-control" placeholder="Short Description" id="short_description" wire:model="short_description"></textarea>
                                    @error('short_description')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-md-4 control-label">
                                    Description
                                </label>
                                <div class="col-md-4" wire:ignore>
                                    <textarea class="form-control" placeholder="Description" id="description" rows="5" wire:model="description"></textarea>
                                    @error('description')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="regularprice" class="col-md-4 control-label">
                                    Regular Price
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Enter Regular Price" id="regularprice" wire:model="regular_price">
                                    @error('regular_price')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="saleprice" class="col-md-4 control-label">
                                    Sale Price
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Enter Sale Price" id="saleprice" wire:model="sale_price">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sku" class="col-md-4 control-label">
                                    SKU
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="SKU" id="sku" wire:model="SKU">
                                    @error('SKU')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="stock" class="col-md-4 control-label">
                                    Stock
                                </label>
                                <div class="col-md-4">
                                    <select id="stock" class="form-control" wire:model="stock_status">
                                        <option value="instock">Instock</option>
                                        <option value="outofstock">Out of Stock</option>
                                    </select>
                                    @error('stock_status')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="featured" class="col-md-4 control-label">
                                    Featured
                                </label>
                                <div class="col-md-4">
                                    <select id="featured" class="form-control" wire:model="featured">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="qty" class="col-md-4 control-label">
                                    Quantity
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Quantity" id="qty" wire:model="quantity">
                                    @error('quantity')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="productimage" class="col-md-4 control-label">
                                    Produt Image
                                </label>
                                <div class="col-md-4">
                                    <input type="file" class="form-control input-file" id="productimage" wire:model="newimage">
                                </div>
                                @if ($newimage)
                                    <div class="col-md-8 pull-right">
                                        <img style="border: 2px solid black; margin-top: 15px;" src="{{ $newimage->temporaryUrl() }}" width="240">
                                    </div>
                                @else
                                <div class="col-md-8 pull-right">
                                    <img style="border: 2px solid black; margin-top: 15px;" src="{{ asset('assets/images/products') }}/{{ $image }}" width="240">
                                </div>
                                @endif

                            </div>
                            <div class="form-group">
                                <label for="productimage" class="col-md-4 control-label">Produt Gallery</label>
                                <div class="col-md-4">
                                    <input type="file" class="form-control input-file" id="productimage" wire:model="newimages" multiple>
                                    @if ($newimages)
                                        @foreach ($newimages as $newimage)
                                            @if ($newimage)
                                                <img src="{{ $newimage->temporaryUrl() }}" width="110">
                                            @endif
                                        @endforeach                                    
                                    @else
                                        @foreach ($images as $image)
                                            @if ($image)
                                                <img src="{{ asset('assets/images/products') }}/{{ $image }}" width="110">
                                            @endif
                                        @endforeach                                
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="category" class="col-md-4 control-label">
                                    Category
                                </label>
                                <div class="col-md-4">
                                    <select id="category" class="form-control" wire:model="category_id" wire:change="changeSubcategory">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category )
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                            
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="category" class="col-md-4 control-label">
                                    Sub Category
                                </label>
                                <div class="col-md-4">
                                    <select id="category" class="form-control" wire:model="scategory_id">
                                        <option value="0">Select Sub Category</option>
                                        @foreach ($scategories as $scategory )
                                        <option value="{{ $scategory->id }}">{{ $scategory->name }}</option>
                                        @endforeach
                                    </select>                                    
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="category" class="col-md-4 control-label">
                                    Product Attributes
                                </label>
                                <div class="col-md-3">
                                    <select id="category" class="form-control" wire:model="attr">
                                        <option value="0">Select Attribute</option>
                                        @foreach ($pattributes as $pattribute )
                                            <option value="{{ $pattribute->id }}">{{ $pattribute->name }}</option>
                                        @endforeach
                                    </select>                                    
                                </div>
                                <div class="col-md-1">
                                    <button type="button" class="btn btn-info" wire:click.prevent="add">Add</button>
                                </div>
                            </div>

                            @foreach ($inputs as $key=>$value)
                                <div class="form-group">
                                    <label for="attr.{{ $key }}" class="col-md-4 control-label">{{ $pattributes->where('id', $attribute_arr[$key])->first()->name }}</label>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control input-md" placeholder="{{ $pattributes->where('id', $attribute_arr[$key])->first()->name }} (separated with comma (,))" id="attr.{{ $key }}" wire:model="attribute_values.{{ $value }}">
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-danger btn-sm" wire:click.prevent="remove({{ $key }})">Remove</button>
                                    </div>
                                </div>
                            @endforeach

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

@push('scripts')
    <script>
        $(function(){
            tinymce.init({
                selector : '#short_description',
                setup:function(editor){
                    editor.on('change', function(e){
                        tinyMCE.triggerSave();
                        var sd_data = $('#short_description').val();
                        @this.set('short_description', sd_data);
                    });
                }
            });

            tinymce.init({
                selector : '#description',
                setup:function(editor){
                    editor.on('change', function(e){
                        tinyMCE.triggerSave();
                        var d_data = $('#description').val();
                        @this.set('description', d_data);
                    });
                }
            });

        });
    </script>
@endpush
