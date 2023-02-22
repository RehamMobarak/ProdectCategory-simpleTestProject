@extends('layouts.master')

@section('content')
    <div class="d-flex justify-content-between mb-4">
        <h3>Categories List</h3>
        <a class="btn btn-success btn-sm" href="{{ route('categories.create') }}">Create New</a>
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
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->created_at }}</td>
                    <td>{{ $category->Name }}</td>
                    <td><a class="btn btn-success btn-sm" href="{{ route('categories.edit', $category->id) }}">Edit</a>
                        <a class="btn btn-info btn-sm" href="{{ route('categories.show', $category->id) }}">Show</a>
                        <form class="d-inline-block" action="{{ route('categories.destroy', $category->id) }}"
                            method="POST">
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
        {!! $categories->links() !!}
    </div>
@endsection
