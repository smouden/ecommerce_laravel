@extends('admin.base')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-12 col-md-8 col-lg-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Détails order</h6>
                <dl class="row">
                    <dt class="col-sm-4">ID :</dt>
                    <dd class="col-sm-8">{{ $order->id }}</dd>
                    <dt class="col-sm-4">Firstname :</dt>
                    <dd class="col-sm-8">{{ $order->firstname }}</dd>
                    <dt class="col-sm-4"> Lastname :</dt>
                    <dd class="col-sm-8">{{ $order->lastname }}</dd>
                    <dt class="col-sm-4"> Phone number </dt>
                    <dd class="col-sm-8">{{ $order->phone_number }}</dd>
                    <dt class="col-sm-4">Email :</dt>
                    <dd class="col-sm-8">{{ $order->email_address }}</dd>
                    <dt class="col-sm-4">Date of the order :</dt>
                    <dd class="col-sm-8">{{ $order->order_date }}</dd>
                    <dt class="col-sm-4">Contry :</dt>
                    <dd class="col-sm-8">{{ $order->country }}</dd>
                    <dt class="col-sm-4">Postcode :</dt>
                    <dd class="col-sm-8">{{ $order->postcode }}</dd>
                    <dt class="col-sm-4">City :</dt>
                    <dd class="col-sm-8">{{ $order->city }}</dd>
                    <dt class="col-sm-4">Adress line :</dt>
                    <dd class="col-sm-8">{{ $order->adress_line }}</dd>
                    
                    <h6 class="mt-4">Ordered items </h6>
                    @foreach($order->orderItems as $item)
                        <dt class="col-sm-4">Product :</dt>
                        <dd class="col-sm-8">{{ $item->title_product_ordered }} (x{{ $item->quantity_product_comanded }})</dd>
                        <dt class="col-sm-4">Unit Price :</dt>
                        <dd class="col-sm-8">{{ $item->price_product_ordered }}</dd>
                        <dt class="col-sm-4">Total :</dt>
                        <dd class="col-sm-8">{{ $item->total_price_product_commanded }}</dd>
                    @endforeach
                </dl>
                <a href="{{ secure_url('/admin/orders') }}" class="btn btn-primary">Back to orders</a>
            </div>
        </div>
    </div>
</div>
@endsection
