<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has('message'))
                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-4">
                                All Procucts
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Search....." wire:model="searchTerm">
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('admin.addproduct') }}" class="btn btn-success pull-right"> Add New</a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Stoct</th>
                                    <th>Price</th>
                                    <th>Sale Price</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td><img width="60" src="{{ asset('assets/images/products') }}/{{ $product->image }}" alt=""></td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->stock_status }}</td>
                                        <td>{{ $product->regular_price }}</td>
                                        <td>{{ $product->sale_price }}</td>
                                        <td>{{ $product->category->name }}</td>
                                        <td>{{ $product->created_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.editproduct', ['product_slug' => $product->slug]) }}"> <i class="fa fa-edit fa-2x"></i></a>
                                            <a href="#" onclick="confirm('Are you sure, You want to delete this product?') || event.stopImmediatePropagation()" style="margin-left: 10px;" wire:click.prevent="deleteProduct({{ $product->id }})"> <i class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap-pagination-info">
            {{$products->links()}}
        </div>
    </div>
</div>
