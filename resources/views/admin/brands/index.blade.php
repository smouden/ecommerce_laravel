@extends('admin.base')


@section('content')
<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="d-flex justify-content-end mb-4">
                <a href="{{ secure_url('/admin/brands/create') }}" class="btn btn-danger">Add brand</a>
            </div>
            <div class="bg-secondary rounded p-4 mt-3">
                <h6 class="mb-4">brands Table</h6>
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name brand</th>
                            <th scope="col" class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($brands as $brand)
                        <tr>
                            <th scope="row">{{ $brand->id }}</th>
                            <td>{{ $brand->name_brand }}</td> <!-- Assurez-vous que votre modèle brand a un attribut name -->
                            <td class="text-end">
                                <a href="{{ secure_url('/admin/brands/show', $brand->id) }}" class="btn btn-primary btn-sm">Show</a>
                                <a href="{{ secure_url('/admin/brands/edit', $brand->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ secure_url('/admin/brands/destroy', $brand->id) }}" method="POST" style="display: inline;">
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
