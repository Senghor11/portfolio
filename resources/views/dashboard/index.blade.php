 
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 fw-bold">Portfolio Dashboard</h1>
    <a href="{{ route('portfolios.create') }}" class="btn btn-primary mb-4">
        <i class="bi bi-plus-circle"></i> Add New Portfolio
    </a>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if($items->count())
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($items as $item)
        <div class="col">
            <div class="card h-100 shadow-sm">
                @if($item->image)
                    <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" style="object-fit:cover; height:180px;">
                @else
                    <div class="bg-light d-flex align-items-center justify-content-center" style="height:180px;">
                        <span class="text-muted">No image</span>
                    </div>
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <p class="card-text text-muted">{{ Str::limit($item->description, 80) }}</p>
                </div>
                <div class="card-footer bg-white border-0 d-flex justify-content-between">
                    <a href="{{ route('portfolios.edit', $item->id) }}" class="btn btn-outline-warning btn-sm">
                        <i class="bi bi-pencil"></i> Edit
                    </a>
                    <form action="{{ route('portfolios.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Delete this item?');">
                        @csrf @method('DELETE')
                        <button class="btn btn-outline-danger btn-sm">
                            <i class="bi bi-trash"></i> Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
         
    @endif
</div>
@endsection