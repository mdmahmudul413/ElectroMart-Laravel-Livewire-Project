<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has('message'))
                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Manage Home Categories
                    </div>
                    <div class="panel-body">
                        <form action="" class="form-horizontal" wire:submit.prevent="updateHomeCategory" id="updateCat">
                            <div class="form-group">
                                <label for="category" class="col-md-4 control-label">Choose Category</label>
                                <div class="col-md-4" wire:ignore>
                                    <select name="categories[]" multiple="multiple" class="sel_categories form-control" wire:model="selected_categories">
                                        @foreach ($categories as $category)
                                            <option
                                            @if ($selected_categories != null)
                                                @if (in_array($category->id, $selected_categories))
                                                    selected
                                                @endif
                                            @endif
                                            value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="product" class="col-md-4 control-label">No of Products</label>
                                <div class="col-md-4">
                                   <input type="text" id="product" placeholder="No of Products" class="form-control input-md" wire:model="numberofproducts">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="product" class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                   <button class="btn btn-primary" type="submit">Save</button>
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
        $(document).ready(function(){
            $('.sel_categories').select2();
            $('.sel_categories').on('change', function(e){
                var data = $('.sel_categories').select2("val");
                @this.set('selected_categories', data);
            });
        });
    </script>
@endpush


