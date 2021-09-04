@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <a href="{{ route('product.form') }}" class="btn btn-primary btn-icons">Nuevo producto</a>
        </div>

</div>

@if(Session::has('message'))
    <p class="alert alert-success">
        {{ Session::get('message') }}

    </p>
@endif

@if(Session::has('messageDelete'))
    <p class="alert alert-danger">
        {{ Session::get('messageDelete') }}

    </p>
    @endif

<table class="table table-striped table-hover">
    <!--Encabezado de la tabla -->
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Cost</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Brand</th>
            <th> </th>
        </tr>
    </thead>

    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product ->id}}</td>
            <td>{{$product ->name}}</td>
            <td>{{$product ->cost}}</td>
            <td>{{$product ->price}}</td>
            <td>{{$product ->quantity}}</td>
            <td>{{$product ->brand -> name}}</td>
            <td class="col-sm-2">
                <a href="{{route('product.form', ['id' => $product ->id])}}" class="btn btn-warning bi bi-file-earmark-text btn-icons"></a>
                <a href="{{route('product.delete', ['id' => $product->id])}}" class="btn btn-danger bi bi-trash btn-icons"></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
