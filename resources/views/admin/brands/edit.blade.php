@extends('admin.base')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-12 col-md-8 col-lg-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Modify brand </h6>
                <form action="{{ secure_url('/admin/brands/update', $brand->id) }}" method="POST">
                    @csrf
                    @method('PUT') <!-- Important pour la mise à jour -->
                    <div class="mb-3">
                        <label for="name_brand" class="form-label">Brand Name </label>
                        <input type="text" class="form-control" id="name_brand" name="name_brand" value="{{ $brand->name_brand }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
