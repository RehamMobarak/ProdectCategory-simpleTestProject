@extends('layouts.master')

@section('content')
    <div class="d-flex justify-content-between mb-4">
        <h3>Edit Category</h3>
        <a class="btn btn-success btn-sm" href="{{ route('categories.index') }}">List Categories</a>
    </div>
    
    @if (session()->has('success'))
        <label class="alert alert-success w-100">{{ session('success') }}</label>
    @elseif(session()->has('error'))
        <label class="alert alert-danger w-100">{{ session('error') }}</label>
    @endif

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="name" type="text" value="{{ $category->Name }}"
                placeholder="category name">
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description" rows="5">{{ $category->Description }}</textarea>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection
