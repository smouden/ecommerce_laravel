@extends('admin.base')


@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-12 col-md-8 col-lg-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Add category</h6>
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name_category" class="form-label">Name category</label>
                        <input type="text" class="form-control" id="name" name="name_category">
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection