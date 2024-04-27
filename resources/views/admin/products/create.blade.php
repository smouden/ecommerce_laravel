@extends('admin.base')


@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-12 col-md-8 col-lg-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Ajouter un produit</h6>
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
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
                        <textarea class="form-control" id="description_product" name="description_product"
                            maxlength="500"></textarea>
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
                        <label for="picture" class="form-label">Image du produit</label>
                        <input type="file" class="form-control" id="picture" name="picture">
                    </div>
                    <!-- ... on insere les trois derniers champs qu'on vient d'ajouter ... -->
                    <div class="mb-3">
                        <label for="gender" class="form-label">Sexe du produit</label>
                        <select class="form-select" id="gender" name="gender">
                            <option value="">Sélectionnez le sexe ciblé</option>
                            <option value="1">Homme</option>
                            <option value="2">Femme</option>
                            <option value="3">Unisexe</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="origin" class="form-label">Origine du produit</label>
                        <input type="text" class="form-control" id="origin" name="origin">
                    </div>
                    <div class="mb-3">
                        <label for="shipping_time" class="form-label">Délai de livraison</label>
                        <input type="text" class="form-control" id="shipping_time" name="shipping_time">
                    </div>
                    <div class="mb-3">
                        <label for="text_product" class="form-label">Texte sur le produit</label>
                        <textarea class="form-control" id="text_product" name="text_product"></textarea>
                    </div>
                    <!-- fin d'inserer les nv champs  -->
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