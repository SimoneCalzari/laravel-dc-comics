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
                    <h5>Description</h5>
                    <p>{{ $comic['description'] }}</p>
                    <h5>Artists</h5>
                    <p>{{ implode(', ', explode(',', $comic['artists'])) }}.</p>
                    <h5>Writers</h5>
                    <p>{{ implode(', ', explode(',', $comic['writers'])) }}.</p>
                </div>
            </div>
        </div>
    </main>
    <!-- /MAIN -->
@endsection
