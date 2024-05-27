@extends('admin.base')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-12 col-md-8 col-lg-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">brand details </h6>
                <dl class="row">
                    <dt class="col-sm-4">ID :</dt>
                    <dd class="col-sm-8">{{ $brand->id }}</dd>
                    
                    <dt class="col-sm-4">Name :</dt>
                    <dd class="col-sm-8">{{ $brand->name_brand }}</dd> <!-- Remplacez 'name_brand' par le nom réel de l'attribut si différent -->
                </dl>
                <a href="{{ route('brands.index') }}" class="btn btn-primary">Back To brands </a>
            </div>
        </div>
    </div>
</div>
@endsection
