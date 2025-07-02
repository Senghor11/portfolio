 
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-sm mt-4">
        <div class="card-header bg-warning text-dark">
            <i class="bi bi-pencil"></i> Edit Portfolio
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('portfolios.update', $item->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label fw-semibold">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $item->title) }}" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label fw-semibold">Description</label>
                    <textarea name="description" class="form-control" rows="4" required>{{ old('description', $item->description) }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label fw-semibold">Image</label>
                    <input type="file" name="image" class="form-control">
                    @if($item->image)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="Current Image" class="img-thumbnail" style="max-width: 150px;">
                        </div>
                    @endif
                </div>
                <button type="submit" class="btn btn-warning">
                    <i class="bi bi-save"></i> Update
                </button>
                <a href="{{ route('portfolios.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection