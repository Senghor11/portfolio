 
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-sm mt-4">
        <div class="card-header bg-primary text-white">
            <i class="bi bi-plus-circle"></i> Add New Portfolio
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('portfolios.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label fw-semibold">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label fw-semibold">Description</label>
                    <textarea name="description" class="form-control" rows="4" required>{{ old('description') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label fw-semibold">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">
                    <i class="bi bi-check-circle"></i> Create
                </button>
                <a href="{{ route('portfolios.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection