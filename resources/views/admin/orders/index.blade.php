@extends('admin.base')


@section('content')
<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded p-4 mt-3">
                <h6 class="mb-4">orders Table</h6>
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">firstname</th>
                            <th scope="col">lastname</th>
                            <th scope="col">order status </th>
                            <th scope="col" class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <th scope="row">{{ $order->id }}</th>
                            <td>{{ $order->firstname }}</td>
                            <td>{{ $order->lastname }}</td>
                            <td>
                                @if ($order->status == 0)
                                <span class="badge bg-secondary">In Progress</span> <!-- En cours de traitement -->
                                @elseif ($order->status == 1)
                                <span class="badge bg-success">Accepted</span> <!-- Accepté -->
                                @elseif ($order->status == 2)
                                <span class="badge bg-danger">Refused</span> <!-- Refusé -->
                                @elseif ($order->status == 3)
                                <span class="badge bg-primary">Delivered</span> <!-- Livré -->
                                @endif
                            </td>
                            <td class="text-end">
                                <a href="{{ route('orders.show', $order->id) }}" class="btn btn-primary btn-sm">Show</a>
                                <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('orders.destroy', $order->id) }}" method="POST"
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