@extends('layout.layout')

@section('title', 'Paid Items')

@section('content')
<table class="table text-center">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
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
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>@fat</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>@twitter</td>
            <td>@mdo</td>
        </tr>
    </tbody>
</table>
@endsection('content')