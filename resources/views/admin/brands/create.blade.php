@extends('admin.base')



@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-12 col-md-8 col-lg-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Add  brand</h6>
                <form action="{{ secure_url('/admin/brands') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name_brand" class="form-label">Name brand</label>
                        <input type="text" class="form-control" id="name" name="name_brand">
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection