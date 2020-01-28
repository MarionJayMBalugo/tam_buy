@extends('layout.admin')

@section('title', 'Paid Items')

@section('content')

@if (session()->has('success'))
<div class="alert alert-info">
    {{ session('success') }}
</div>
@endif

<table class="table text-center">
    <thead>
        <tr>
            <th scope="col">PRODUCT TITLE</th>
            <th scope="col">ORDERED BY</th>
            <th scope="col">PRICE</th>
            <th scope="col">QUANTITY</th>
            <th scope="col">TOTAL COST</th>
            <th scope="col">DELIVERED</th>
        </tr>
    </thead>
    <tbody>
        @foreach($paid_items as $paid_item)
        <tr>
            <th scope="row" class="text-info">
                <a href="{{ route('admin_viewProduct', $paid_item['product_id']) }}">
                    {{ $paid_item->product->product_title }}
                </a>
            </th>
            <td class="text-info">
                <a href="{{ route('admin_viewUser', $paid_item['user_id']) }}">
                    {{ $paid_item->user->username }}
                </a>
            </td>
            <td>{{ $paid_item->product->price }}</td>
            <td>{{ $paid_item->quantity }}</td>
            <td>{{ $paid_item->total_cost }}</td>
            <td>{{ $paid_item->updated_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection('content')