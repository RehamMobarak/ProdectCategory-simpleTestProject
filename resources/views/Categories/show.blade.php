@extends('layouts.master')

@section('content')
    <div class="d-flex justify-content-between mb-4">
        <h3>Show Category</h3>
        <a class="btn btn-success btn-sm" href="{{ route('categories.index') }}">List Categories</a>
    </div>

    <div class="form-group">
        <label>Name</label>
        <input class="form-control" name="name" type="text" value="{{ $category->Name }}" disabled>
    </div>

    <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" name="description" rows="3" placeholder="category description" disabled>{{ $category->Description }}</textarea>
    </div>

    <h4>
        <th>Products</th>
    </h4>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Code</th>
                <th>Color</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($category->products as $product)
                <tr>
                    <td>{{ $product->Name }}</td>
                    <td>{{ $product->Code }}</td>
                    <td>{{ $product->Color }}</td>
                    <td><img class="img-thumbnail" src="{{ URL::to('/') }}/images/{{ $product->Image }}" width="75">
                    </td>
                    <td><a class="btn btn-info btn-sm" href="{{ route('products.show', $product->id) }}">Show</a></td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
