@extends('admin.base')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-12 col-md-8 col-lg-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Détails de la commande</h6>
                <dl class="row">
                    <dt class="col-sm-4">ID :</dt>
                    <dd class="col-sm-8">{{ $order->id }}</dd>
                    <dt class="col-sm-4">Prénom :</dt>
                    <dd class="col-sm-8">{{ $order->firstname }}</dd>
                    <dt class="col-sm-4">Nom :</dt>
                    <dd class="col-sm-8">{{ $order->lastname }}</dd>
                    <dt class="col-sm-4">Numéro de téléphone :</dt>
                    <dd class="col-sm-8">{{ $order->phone_number }}</dd>
                    <dt class="col-sm-4">Adresse email :</dt>
                    <dd class="col-sm-8">{{ $order->email_address }}</dd>
                    <dt class="col-sm-4">Date de la commande :</dt>
                    <dd class="col-sm-8">{{ $order->order_date }}</dd>
                    <dt class="col-sm-4">Pays :</dt>
                    <dd class="col-sm-8">{{ $order->country }}</dd>
                    <dt class="col-sm-4">Code Postal :</dt>
                    <dd class="col-sm-8">{{ $order->postcode }}</dd>
                    <dt class="col-sm-4">Ville :</dt>
                    <dd class="col-sm-8">{{ $order->city }}</dd>
                    <dt class="col-sm-4">Adresse :</dt>
                    <dd class="col-sm-8">{{ $order->adress_line }}</dd>
                    
                    <h6 class="mt-4">Articles commandés</h6>
                    @foreach($order->orderItems as $item)
                        <dt class="col-sm-4">Produit :</dt>
                        <dd class="col-sm-8">{{ $item->title_product_ordered }} (x{{ $item->quantity_product_comanded }})</dd>
                        <dt class="col-sm-4">Prix unitaire :</dt>
                        <dd class="col-sm-8">{{ $item->price_product_ordered }}</dd>
                        <dt class="col-sm-4">Total :</dt>
                        <dd class="col-sm-8">{{ $item->total_price_product_commanded }}</dd>
                    @endforeach
                </dl>
                <a href="{{ route('orders.index') }}" class="btn btn-primary">Retour aux commandes</a>
            </div>
        </div>
    </div>
</div>
@endsection
