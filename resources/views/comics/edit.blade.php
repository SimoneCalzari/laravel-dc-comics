@extends('layouts.app')

@section('main')
    <main>
        <div class="container mb-4">
            <div class="d-flex align-items-center justify-content-between">
                <h2 class="text-center py-2">Comic Update</h2>
                <button class="btn btn-primary">
                    <a href="{{ route('comics.index') }}" class="text-white text-decoration-none">Back to Comics List</a>
                </button>
            </div>
            <form method="POST" action="{{ route('comics.update', $comic) }}">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="mb-3 col">
                        <label for="title" class="form-label">Title</label>
                        <input name="title" type="text" class="form-control" id="title" placeholder="Insert title"
                            value="{{ $comic['title'] }}">
                    </div>
                    <div class="mb-3 col">
                        <label for="series" class="form-label">Series</label>
                        <input name="series" type="text" class="form-control" id="series" placeholder="Insert series"
                            value="{{ $comic['series'] }}">
                    </div>
                    <div class="mb-3 col">
                        <label for="type" class="form-label">Type</label>
                        <input name="type" type="text" class="form-control" id="type" placeholder="Insert type"
                            value="{{ $comic['type'] }}">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input name="thumb" type="text" class="form-control" id="thumb" placeholder="Insert thumb"
                            value="{{ $comic['thumb'] }}">
                    </div>
                    <div class="mb-3 col">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input name="sale_date" type="date" class="form-control" id="sale_date"
                            placeholder="Insert Sale Date" value="{{ $comic['sale_date'] }}">
                    </div>
                    <div class="mb-3 col">
                        <label for="price" class="form-label">Price</label>
                        <input name="price" type="number" class="form-control" id="price" placeholder="Insert price"
                            step="0.01" value="{{ $comic['price'] }}">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col">
                        <label for="artists" class="form-label">Artists</label>
                        <input name="artists" type="text" class="form-control" id="artists"
                            placeholder="Insert Artists" value="{{ $comic['artists'] }}">
                    </div>
                    <div class="mb-3 col">
                        <label for="writers" class="form-label">Writers</label>
                        <input name="writers" type="text" class="form-control" id="writers"
                            placeholder="Insert Writers" value="{{ $comic['writers'] }}">
                    </div>
                </div>
                <label for="description" class="mb-2">Description</label>
                <textarea class="form-control mb-3" placeholder="Leave your description" id="description" name="description"
                    style="height: 200px">{{ $comic['description'] }}</textarea>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </main>
@endsection
