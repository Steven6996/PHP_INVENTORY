@extends('layout')
@section('header', 'Brands - Laravel')
@section('content')

<div class="row">
    <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <a href="{{ route('brand.form') }}" class="btn btn-primary bi bi-file-earmark-plus btn-icons">Nueva marca</a>
        </div>

</div>

@if(Session::has('message'))
<p class="alert alert-success">
    {{Session::get('message')}}

</p>
@endif


<!-- Vista de la tabla brand  -->
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>description</th>
            
            <th></th>
        </tr>
    </thead>

    <tbody>
        @foreach($Categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->description}}</td>
            
            <td class="col-sm-2">
                <a href="{{ route('brand.form', ['id' => $brand->id]) }}" class="btn btn-warning bi bi-file-earmark-text btn-icons"></a>
                <a href="{{ route('brand.delete', ['id' => $brand->id]) }}" class="btn btn-danger bi bi-trash btn-icons"></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection 