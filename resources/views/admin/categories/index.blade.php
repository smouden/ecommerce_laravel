@extends('admin.base')

@section('content')
<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="d-flex justify-content-end mb-4">
                <a href="{{ url('/admin/categories/create') }}" class="btn btn-danger">Add category</a>
            </div>
            <div class="bg-secondary rounded p-4 mt-3">
                <h6 class="mb-4">Categories Table</h6>
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name category</th>
                            <th scope="col" class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <th scope="row">{{ $category->id }}</th>
                            <td>{{ $category->name_category }}</td> <!-- Assurez-vous que votre modèle category a un attribut name -->
                            <td class="text-end">
                                <a href="{{ secure_url('/admin/categories/' . $category->id) }}" class="btn btn-primary btn-sm">Show</a>
                                <a href="{{ url('/admin/categories/' . $category->id . '/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ url('/admin/categories/' . $category->id) }}" method="POST" style="display: inline;">
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
