@extends('admin.base')


@section('content')
<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="d-flex justify-content-end mb-4">
                <a href="{{ secure_url('/admin/products/create') }}" class="btn btn-danger">Add product</a>
            </div>
            <div class="bg-secondary rounded p-4 mt-3">
                <h6 class="mb-4">products Table</h6>
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity </th>
                            <th scope="col">Image</th>
                            <th scope="col" class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td>{{ $product->title_product }}</td>
                            <td>{{ $product->price_product }}</td>
                            <td>{{ $product->stock_quantity }}</td>
                            <td>
                                <img src="{{ asset($product->picture) }}" alt="image du produit"
                                    style="width: 100px !important; height: 60px !important;">
                            </td>
                            <td class="text-end">
                                <a href="{{ secure_url('/admin/products.show', $product->id) }}"
                                    class="btn btn-primary btn-sm">Show</a>
                                <a href="{{ secure_url('/admin/products/edit', $product->id) }}"
                                    class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ secure_url('/admin/products/destroy', $product->id) }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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