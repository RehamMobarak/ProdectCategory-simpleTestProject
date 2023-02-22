@extends('layouts.master')

@section('content')
    <div class="d-flex justify-content-between mb-4">
        <h3>Show Product</h3>
        <a class="btn btn-success btn-sm" href="{{ route('products.index') }}">List Products</a>
    </div>
    <img class="img-thumbnail" src="{{ URL::to('/') }}/images/{{ $product->Image }}" height="140" width="140">

    <div class="form-group">
        <label>Name</label>
        <input class="form-control" name="name" type="text" value="{{ $product->Name }}" disabled>
    </div>
    <div class="form-group">
        <label>Color</label>
        <input class="form-control" name="color" type="text" value="{{ $product->Color }}" disabled>
    </div>
    <div class="form-group">
        <label>Code</label>
        <input class="form-control" name="code" type="number" value="{{ $product->Code }}" disabled>
    </div>
    <div class="form-group">
        <label>Category</label>
        <input class="form-control" name="color" type="text" value="{{ $product->category->Name }}" disabled>
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" name="description" rows="3" placeholder="product description" disabled>{{ $product->Description }}</textarea>
    </div>
@endsection
