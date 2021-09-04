@extends('layout')
@section('title',$product -> id ? 'Actualizar Producto' : 'Nuevo Producto')
@section('header', $product -> id ? 'Actualizar Producto' : 'Nuevo Producto')
@section('content')

<form action="{{ route('product.save') }}" method="post"> <!-- ruta o metodo para guardar datos por el formulario -->
    @csrf
    <input type="hidden" name="id" value="{{$product -> id}}">
    <div class="row mb-3"> <!-- Name -->
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name" value="{{@old('name') ? @old('name') : $product -> name }}">
          @error('name')
            <p class="text-danger">
            {{$message}}
            </p>
          @enderror
        </div>
   </div>

    <div class="row mb-3"> <!-- Cost -->
        <label for="name" class="col-sm-2 col-form-label">Cost</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="cost" value="{{ @old('cost') ?  @old('cost') : $product -> cost }}">
        @error('cost')
            <p class="text-danger">
            {{$message}}
            </p>
        @enderror
        </div>

    </div>

    <div class="row mb-3"><!-- Price -->
        <label for="name" class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="price" value="{{ @old('price') ? @old('price'): $product -> price }}">
          @error('price')
            <p class="text-danger">
            {{$message}}
            </p>
        @enderror
        </div>
    </div>

    <div class="row mb-3"><!-- Quantity -->
        <label for="name" class="col-sm-2 col-form-label">Quantity</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="quantity" value="{{ @old('quantity') ? @old('quantity') : $product -> quantity }}">
          @error('quantity')
            <p class="text-danger">
            {{$message}}
            </p>
        @enderror
        </div>
    </div>

    <div class="row mb-3"><!-- Brand -->
        <label for="name" class="col-sm-2 col-form-label">Brand</label>
        <div class="col-sm-10">
        <select name="brand" class="form-select">
            @foreach ($brands as $brand)
                <option value="{{ $brand->id }}"
                    {{$product -> brand_id == $brand -> id ? "selected":""}}
                    >{{ $brand->name }}
                </option>
            @endforeach
          </select>
          @error('brand')
            <p class="text-danger">
            {{$message}}
            </p>
          @enderror
        </div>
    </div>

    <div class="row mb-3"> <!-- Botones de cancelar y guardar -->
        <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <a href="/products" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>
@endSection
