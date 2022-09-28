<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has('message'))
                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Sale Setting
                    </div>
                    <div class="panel-body">
                        <form action="" class="form-horizontal" wire:submit.prevent="updateSale">
                            <div class="form-group">
                                <label for="status" class="col-md-4 control-label">Status</label>
                                <div class="col-md-4">
                                    <select id="status" class="form-control" wire:model="status">
                                        <option value="0">Inactive</option>
                                        <option value="1">Active</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sale-date" class="col-md-4 control-label">
                                    Sale Date
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="YYYY/MM/DD H:M:S" id="sale-date" wire:model="sale_date">
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

@push('scripts')
    <script>
        $(function(){
            $('#sale-date').datetimepicker({
                format: 'Y-MM-DD h:m:s',
            })
            .on('dp.change', function(ev){
                var data = $('#sale-date').val();
                @this.set('sale_date', data);
            });
        });
    </script>
@endpush
