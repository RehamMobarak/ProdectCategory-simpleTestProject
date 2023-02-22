@extends('layouts.master')

@section('content')
    <div class="d-flex justify-content-between mb-4">
        <h3>Edit Product</h3>
        <a class="btn btn-success btn-sm" href="{{ route('products.index') }}">List Products</a>
    </div>
    <img class="img-thumbnail" src="{{ URL::to('/') }}/images/{{ $product->Image }}" width="75">

    @if (session()->has('success'))
        <label class="alert alert-success w-100">{{ session('success') }}</label>
    @elseif(session()->has('error'))
        <label class="alert alert-danger w-100">{{ session('error') }}</label>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="name" type="text" value="{{ $product->Name }}"
                placeholder="product name">
        </div>
        <div class="form-group">
            <label>Color</label>
            <input class="form-control" name="color" type="text" value="{{ $product->Color }}"
                placeholder="product color">
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Code</label>
                            <input class="form-control" name="code" type="number" value="{{ $product->Code }}"
                                placeholder="product code">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>category id</label>
                            <input class="form-control" name="category_id" type="text"
                                value="{{ $product->category_id }}" placeholder="product category_id">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <input class="form-control @error('photo') is-invalid @enderror" name="image" type="file">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description" rows="5">{{ $product->Description }}</textarea>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection
