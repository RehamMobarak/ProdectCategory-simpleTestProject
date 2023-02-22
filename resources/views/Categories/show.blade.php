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
@endsection
