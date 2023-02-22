@extends('layouts.master')

@section('content')
    <div class="d-flex justify-content-between mb-4">
        <h3>Create Product</h3>
        <a class="btn btn-success btn-sm" href="{{ route('products.index') }}">List Products</a>
    </div>

    @if (session()->has('success'))
        <label class="alert alert-success w-100">{{ session('success') }}</label>
    @elseif(session()->has('error'))
        <label class="alert alert-danger w-100">{{ session('error') }}</label>
    @endif

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="name" type="text" placeholder="product name">
        </div>

        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Color</label>
                            <input class="form-control" name="color" type="text" placeholder="product color">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Category</label>

                            <select class="form-control" name="category_id">
                                <option value=""> -- Select One --</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->Name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <input class="form-control @error('photo') is-invalid @enderror" name="image" type="file" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description" rows="5" placeholder="product description"></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection
