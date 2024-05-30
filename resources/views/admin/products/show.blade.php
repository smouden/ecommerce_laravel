@extends('admin.base')


@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-12 col-md-8 col-lg-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Product Details</h6>
                <dl class="row">
                    <dt class="col-sm-4">ID:</dt>
                    <dd class="col-sm-8">{{ $product->id }}</dd>

                    <dt class="col-sm-4">Title:</dt>
                    <dd class="col-sm-8">{{ $product->title_product }}</dd>

                    <dt class="col-sm-4">Price:</dt>
                    <dd class="col-sm-8">{{ $product->price_product }}</dd>

                    <dt class="col-sm-4">Description:</dt>
                    <dd class="col-sm-8">{{ $product->description_product }}</dd>

                    <dt class="col-sm-4">Stock Quantity:</dt>
                    <dd class="col-sm-8">{{ $product->stock_quantity }}</dd>

                    <dt class="col-sm-4">Size:</dt>
                    <dd class="col-sm-8">{{ $product->size_product }}</dd>

                    <dt class="col-sm-4">Category:</dt>
                    <dd class="col-sm-8">{{ $product->category->name_category ?? 'Not assigned' }}</dd>

                    <dt class="col-sm-4">Brand:</dt>
                    <dd class="col-sm-8">{{ $product->brand->name_brand ?? 'Not assigned' }}</dd>
                    <dt class="col-sm-4">Gender:</dt>
                    <dd class="col-sm-8">
                        @if($product->gender === 1)
                            Male
                        @elseif($product->gender === 2)
                            Female
                        @elseif($product->gender === 3)
                            Unisex
                        @else
                            Not specified
                        @endif
                    </dd>

                    <dt class="col-sm-4">Origin:</dt>
                    <dd class="col-sm-8">{{ $product->origin }}</dd>

                    <dt class="col-sm-4">Shipping Time:</dt>
                    <dd class="col-sm-8">{{ $product->shipping_time }}</dd>

                    <dt class="col-sm-4">Additional Text:</dt>
                    <dd class="col-sm-8">{{ $product->text_product }}</dd>
                </dl>
                <a href="{{ secure_url('/admin/products') }}" class="btn btn-primary">Back to Products</a>
            </div>
        </div>
    </div>
</div>
@endsection
