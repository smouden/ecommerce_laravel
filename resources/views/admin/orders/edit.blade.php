@extends('admin.base')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-12 col-md-8 col-lg-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Modifier le statut de la commande</h6>
                <form action="{{ route('orders.update', $order->id) }}" method="POST">
                    @csrf
                    @method('PUT') <!-- Important pour la mise à jour -->
                    <div class="mb-3">
                        <label for="status" class="form-label">Order Status</label>
                        <select class="form-select" id="status" name="status">
                            <option value="0" {{ $order->status == 0 ? 'selected' : '' }}>In Progress</option>
                            <option value="1" {{ $order->status == 1 ? 'selected' : '' }}>Accepted</option>
                            <option value="2" {{ $order->status == 2 ? 'selected' : '' }}>Refused</option>
                            <option value="3" {{ $order->status == 3 ? 'selected' : '' }}>Delivered</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Mettre à jour</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection