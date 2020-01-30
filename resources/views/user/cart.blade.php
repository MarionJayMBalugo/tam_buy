@extends('layout.layout')

@section('title', 'Cart')

@section('content')
<table class="table text-center">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>
                <a href="">
                    OMBRE STAR PRINT CREPE PLEATED EMPIRE DRESS
                </a>
            </td>
            <td>@mdo</td>
            <td>
                <input type="number" class="btn btn-lg" value="1">
            </td>
            <td>
                <button class="btn btn-danger btn-lg">Remove</button>
            </td>
        </tr>
    </tbody>
</table>
@endsection('content')