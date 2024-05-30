@extends('admin.base')


@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-12 col-md-8 col-lg-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Add product</h6>
                <form action="{{ secure_url('/admin/products') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title_product" class="form-label">Title Product</label>
                        <input type="text" class="form-control" id="title_product" name="title_product">
                    </div>
                    <div class="mb-3">
                        <label for="price_product" class="form-label">Price Product</label>
                        <input type="number" step="0.01" class="form-control" id="price_product" name="price_product">
                    </div>
                    <div class="mb-3">
                        <label for="description_product" class="form-label">Description Product</label>
                        <textarea class="form-control" id="description_product" name="description_product"
                            maxlength="500"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="stock_quantity" class="form-label">Stock Quantity</label>
                        <input type="number" class="form-control" id="stock_quantity" name="stock_quantity">
                    </div>
                    <div class="mb-3">
                        <label for="size_product" class="form-label">Size Product</label>
                        <input type="text" class="form-control" id="size_product" name="size_product" maxlength="50">
                    </div>
                    <div class="mb-3">
                        <label for="picture" class="form-label">Picture Product</label>
                        <input type="file" class="form-control" id="picture" name="picture">
                    </div>
                    <!-- ... on insere les trois derniers champs qu'on vient d'ajouter ... -->
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender Product</label>
                        <select class="form-select" id="gender" name="gender">
                            <option value="">
                                Select the target gender</option>
                            <option value="1">Man</option>
                            <option value="2">Female</option>
                            <option value="3">Unisex</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="origin" class="form-label">Product origin</label>
                        <input type="text" class="form-control" id="origin" name="origin">
                    </div>
                    <div class="mb-3">
                        <label for="shipping_time" class="form-label">Delivery time</label>
                        <input type="text" class="form-control" id="shipping_time" name="shipping_time">
                    </div>
                    <div class="mb-3">
                        <label for="text_product" class="form-label">Text about Product</label>
                        <textarea class="form-control" id="text_product" name="text_product"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Category</label>
                        <select class="form-select" id="category_id" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name_category }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="brand_id" class="form-label">Brand</label>
                        <select class="form-select" id="brand_id" name="brand_id">
                            @foreach($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name_brand }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection