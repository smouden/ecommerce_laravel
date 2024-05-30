@extends('admin.base')


@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-12 col-md-8 col-lg-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Edit Product</h6>
                <form action="{{ secure_url('/admin/products/update', $product->id) }}" method="POST">
                    @csrf
                    @method('PUT') <!-- Important for the update -->
                    <div class="mb-3">
                        <label for="title_product" class="form-label">Product Title</label>
                        <input type="text" class="form-control" id="title_product" name="title_product" value="{{ $product->title_product }}">
                    </div>
                    <div class="mb-3">
                        <label for="price_product" class="form-label">Product Price</label>
                        <input type="text" class="form-control" id="price_product" name="price_product" value="{{ $product->price_product }}">
                    </div>
                    <div class="mb-3">
                        <label for="description_product" class="form-label">Product Description</label>
                        <textarea class="form-control" id="description_product" name="description_product">{{ $product->description_product }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="stock_quantity" class="form-label">Stock Quantity</label>
                        <input type="number" class="form-control" id="stock_quantity" name="stock_quantity" value="{{ $product->stock_quantity }}">
                    </div>
                    <div class="mb-3">
                        <label for="size_product" class="form-label">Product Size</label>
                        <input type="text" class="form-control" id="size_product" name="size_product" value="{{ $product->size_product }}">
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Category</label>
                        <select class="form-select" id="category_id" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name_category }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="brand_id" class="form-label">Brand</label>
                        <select class="form-select" id="brand_id" name="brand_id">
                            @foreach($brands as $brand)
                                <option value="{{ $brand->id }}" {{ $product->brand_id == $brand->id ? 'selected' : '' }}>{{ $brand->name_brand }}</option>
                            @endforeach
                        </select>
                    </div>
                     <!-- Champ pour le sexe du produit -->
                     <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-select" id="gender" name="gender">
                            <option value="1" {{ $product->gender == 1 ? 'selected' : '' }}>Male</option>
                            <option value="2" {{ $product->gender == 2 ? 'selected' : '' }}>Female</option>
                            <option value="3" {{ $product->gender == 3 ? 'selected' : '' }}>Unisex</option>
                        </select>
                    </div>

                    <!-- Champ pour l'origine du produit -->
                    <div class="mb-3">
                        <label for="origin" class="form-label">Origin</label>
                        <input type="text" class="form-control" id="origin" name="origin" value="{{ $product->origin }}">
                    </div>

                    <!-- Champ pour le délai de livraison -->
                    <div class="mb-3">
                        <label for="shipping_time" class="form-label">Shipping Time</label>
                        <input type="text" class="form-control" id="shipping_time" name="shipping_time" value="{{ $product->shipping_time }}">
                    </div>

                    <!-- Champ pour le texte supplémentaire du produit -->
                    <div class="mb-3">
                        <label for="text_product" class="form-label">Additional Text</label>
                        <textarea class="form-control" id="text_product" name="text_product">{{ $product->text_product }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
