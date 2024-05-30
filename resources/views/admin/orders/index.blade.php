@extends('admin.base')

@section('content')
<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded p-4 mt-3">
                <h6 class="mb-4">Orders Table</h6>
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Firstname</th>
                            <th scope="col">Lastname</th>
                            <th scope="col">Order Status</th>
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
                                <a href="{{ url('/admin/orders/' . $order->id) }}" class="btn btn-primary btn-sm">Show</a>
                                <a href="{{ url('/admin/orders/' . $order->id . '/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ url('/admin/orders/' . $order->id) }}" method="POST" style="display: inline;">
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
