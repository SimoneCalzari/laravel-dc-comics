@extends('layouts.app')

@section('main')
    <!-- MAIN -->
    <main>
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <h2 class="text-center py-2">{{ $comic['title'] }}</h2>
                <button class="btn btn-primary">
                    <a href="{{ route('comics.index') }}" class="text-white text-decoration-none">Back to Comics List</a>
                </button>
            </div>
            <div class="row">
                <div class="col-5">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="w-100">
                </div>
                <div class="col-7">
                    <h5 class="mb-1">Title</h5>
                    <p class="mb-3 fs-6">{{ $comic['title'] }}</p>
                    <h6 class="mb-1">Series</h6>
                    <p class="mb-3 fs-6">{{ $comic['series'] }}</p>
                    <h6 class="mb-1">Type</h6>
                    <p class="mb-3 fs-6">{{ $comic['type'] }}</p>
                    <h6 class="mb-1">Description</h6>
                    <p class="mb-3 fs-6">{{ $comic['description'] }}</p>
                    <h6 class="mb-1">Artists</h6>
                    <p class="mb-3 fs-6">{{ implode(', ', explode(',', $comic['artists'])) }}</p>
                    <h6 class="mb-1">Writers</h6>
                    <p class="mb-3 fs-6">{{ implode(', ', explode(',', $comic['writers'])) }}</p>
                </div>
            </div>
        </div>
    </main>
    <!-- /MAIN -->
@endsection
