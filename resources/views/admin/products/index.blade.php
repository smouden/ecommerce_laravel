@extends('admin.base')


@section('content')
<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="d-flex justify-content-end mb-4">
                <a href="{{ route('products.create') }}" class="btn btn-danger">Ajouter un produit</a>
            </div>
            <div class="bg-secondary rounded p-4 mt-3">
                <h6 class="mb-4">Tableau des Produits</h6>
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Titre</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Description</th>
                            <th scope="col">Quantité en Stock</th>
                            <th scope="col">Taille</th>
                            <th scope="col">Image</th>
                            <th scope="col">Catégorie</th>
                            <th scope="col">Marque</th>
                            <th scope="col" class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td>{{ $product->title_product }}</td>
                            <td>{{ $product->price_product }}</td>
                            <td>{{ $product->description_product }}</td>
                            <td>{{ $product->stock_quantity }}</td>
                            <td>{{ $product->size_product }}</td>
                            <td>
                                <img src="{{ asset($product->picture) }}" alt="image du produit"
                                    style="width: 100px !important; height: 60px !important;">
                            </td>
                            <td>{{ $product->category->name_category ?? 'N/A' }}</td>
                            <!-- Suppose que vous avez un attribut 'name' dans le modèle Category -->
                            <td>{{ $product->brand->name_brand ?? 'N/A' }}</td>
                            <!-- Suppose que vous avez un attribut 'name' dans le modèle Brand -->
                            <td class="text-end">
                                <a href="{{ route('products.show', $product->id) }}"
                                    class="btn btn-primary btn-sm">Voir</a>
                                <a href="{{ route('products.edit', $product->id) }}"
                                    class="btn btn-warning btn-sm">Modifier</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->
@endsection