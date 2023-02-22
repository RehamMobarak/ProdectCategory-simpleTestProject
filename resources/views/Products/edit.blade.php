
@extends('layouts.master')

@section('content')

    <div class="d-flex justify-content-between mb-4">
        <h3>Edit Product</h3>
        <a class="btn btn-success btn-sm" href="{{ route('products.index') }}">List Products</a>
    </div>

    @if(session()->has('success'))
        <label class="alert alert-success w-100">{{session('success')}}</label>
    @elseif(session()->has('error'))
        <label class="alert alert-danger w-100">{{session('error')}}</label>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="product name" value="{{ $product->Name }}">
        </div>
        <div class="form-group">
            <label>Color</label>
            <input type="text" name="color" class="form-control" placeholder="product color" value="{{ $product->Color }}">
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Code</label>
                            <input type="number" name="code" class="form-control" placeholder="product code" value="{{ $product->Code }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>category id</label>
                            <input type="text" name="category_id" class="form-control" placeholder="product category_id" value="{{ $product->category_id }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" rows="5" class="form-control">{{ $product->Description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection