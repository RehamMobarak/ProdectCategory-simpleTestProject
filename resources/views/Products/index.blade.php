@extends('layouts.master')

@section('content')
    <div class="d-flex justify-content-between mb-4">
        <h3>Products List</h3>
        <a class="btn btn-success btn-sm" href="{{ route('products.create') }}">Create New</a>
    </div>

    @if (session()->has('success'))
        <label class="alert alert-success w-100">{{ session('success') }}</label>
    @elseif(session()->has('error'))
        <label class="alert alert-danger w-100">{{ session('error') }}</label>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Created At</th>
                <th>Name</th>
                <th>Code</th>
                <th>Color</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->created_at }}</td>
                    <td>{{ $product->Name }}</td>
                    <td>{{ $product->Code }}</td>
                    <td>{{ $product->Color }}</td>
                    <td><img class="img-thumbnail" src="{{ URL::to('/') }}/images/{{ $product->Image }}" width="75"></td>
                    <td>
                        <a class="btn btn-success btn-sm" href="{{ route('products.edit', $product->id) }}">Edit</a>
                        <a class="btn btn-info btn-sm" href="{{ route('products.show', $product->id) }}">Show</a>
                        <form class="d-inline-block" action="{{ route('products.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

    <div class="d-flex justify-content-between">
        {!! $products->links() !!}
    </div>
@endsection
