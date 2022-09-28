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
                                Add New Coupon
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.coupons') }}" class="btn btn-success pull-right">All Coupon</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="" class="form-horizontal" wire:submit.prevent="storeCoupon">
                            <div class="form-group">
                                <label for="couponcode" class="col-md-4 control-label">
                                    Coupon Code
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Enter Coupon Code" id="couponcode" wire:model="code">
                                    @error('code')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="coupontype" class="col-md-4 control-label">
                                    Coupon Type
                                </label>
                                <div class="col-md-4">
                                    <select class="form-control" name="" id="coupontype" wire:model="type">
                                        <option value="">Select</option>
                                        <option value="fixed">Fixed</option>
                                        <option value="parcent">Percent</option>
                                    </select>
                                    @error('type')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="couponvalue" class="col-md-4 control-label">
                                    Coupon Value
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Enter Coupon Value" id="couponvalue" wire:model="value">
                                    @error('value')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cartvalue" class="col-md-4 control-label">
                                    Cart Value
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" placeholder="Enter Cart Value" id="cartvalue" wire:model="cart_value">
                                    @error('cart_value')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="expiry-date" class="col-md-4 control-label">
                                    Expiry Date
                                </label>
                                <div class="col-md-4" wire:ignore>
                                    <input type="text" class="form-control input-md" placeholder="Enter Expiry Date" id="expiry-date" wire:model="expiry_date">
                                    @error('expiry_date')
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

@push('scripts')
    <script>
        $(function(){
            $('#expiry-date').datetimepicker({
                format: 'Y-MM-DD'
            })
            .on('dp.change', function(ev){
                var data = $('#expiry-date').val();
                @this.set('expiry_date', data);
            });
        });
    </script>
@endpush
