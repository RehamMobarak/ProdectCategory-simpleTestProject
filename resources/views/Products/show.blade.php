@extends('layouts.master')

@section('content')

    <div class="d-flex justify-content-between mb-4">
        <h3>Show Product</h3>
        <a class="btn btn-success btn-sm" href="{{ route('products.index') }}">List Products</a>
    </div>

    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="{{ $product->Name }}" disabled>
    </div>
    <div class="form-group">
        <label>Color</label>
        <input type="text" name="color" class="form-control" value="{{ $product->Color }}" disabled>
    </div>
    <div class="form-group">
        <label>Code</label>
        <input type="number" name="code" class="form-control" value="{{ $product->Code }}" disabled>
    </div>
    <div class="form-group">
        <label>Category</label>
        <input type="text" name="color" class="form-control" value="{{ $product->category->Name}}" disabled>
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="description" rows="5" placeholder="product description" class="form-control" disabled>{{ $product->Description }}</textarea>
    </div>
@endsection