@extends('layout.admin')

@section('title', 'Pendings')

@section('content')
<table class="table text-center">
    <thead>
        <tr>
            <th scope="col">PRODUCT TITLE</th>
            <th scope="col">ORDERED BY</th>
            <th scope="col">PRICE</th>
            <th scope="col">QUANTITY</th>
            <th scope="col">TOTAL COST</th>
            <th scope="col">ACTION</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pendings as $pending)
        <tr>
            <th scope="row" class="text-info">
                <a href="{{ url('admin/view/product', $pending->product_id) }}">
                    {{ $pending->product->product_title }}
                </a>
            </th>
            <td class="text-info">
                <a href="{{ url('admin/view/user', $pending->user_id) }}">
                    {{ $pending->user->username }}
                </a>
            </td>
            <td>{{ $pending->product->price }}</td>
            <td>{{ $pending->quantity }}</td>
            <td>{{ $pending->total_cost }}</td>
            <td>
                <a href="{{ url('admin/paiditems/add', $pending->id) }}"><button type="submit"
                        class="btn btn-success btn-lg">Delivered</button></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection('content')