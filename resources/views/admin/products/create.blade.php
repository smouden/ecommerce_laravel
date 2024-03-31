@extends('admin.base')


@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-12 col-md-8 col-lg-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Ajouter un produit</h6>
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title_product" class="form-label">Titre du produit</label>
                        <input type="text" class="form-control" id="title_product" name="title_product">
                    </div>
                    <div class="mb-3">
                        <label for="price_product" class="form-label">Prix du produit</label>
                        <input type="number" step="0.01" class="form-control" id="price_product" name="price_product">
                    </div>
                    <div class="mb-3">
                        <label for="description_product" class="form-label">Description du produit</label>
                        <textarea class="form-control" id="description_product" name="description_product" maxlength="500"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="stock_quantity" class="form-label">Quantité en stock</label>
                        <input type="number" class="form-control" id="stock_quantity" name="stock_quantity">
                    </div>
                    <div class="mb-3">
                        <label for="size_product" class="form-label">Taille du produit</label>
                        <input type="text" class="form-control" id="size_product" name="size_product" maxlength="50">
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Catégorie</label>
                        <select class="form-select" id="category_id" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name_category }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="brand_id" class="form-label">Marque</label>
                        <select class="form-select" id="brand_id" name="brand_id">
                            @foreach($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name_brand }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
