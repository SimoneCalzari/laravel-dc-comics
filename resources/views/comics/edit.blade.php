@extends('layouts.app')

@section('main')
    <!-- MAIN -->
    <main class="pt-2 pb-4">
        <div class="container">
            <!-- TITOLO SEZIONE E BUTTON PER TORNARE ALLA LISTA COMIC -->
            <div class="d-flex align-items-center justify-content-between">
                <h2 class="text-center py-2">Comic Update</h2>
                <button class="btn btn-primary">
                    <a href="{{ route('comics.index') }}" class="text-white text-decoration-none">Back to Comics List</a>
                </button>
            </div>
            <!-- /TITOLO SEZIONE E BUTTON PER TORNARE ALLA LISTA COMIC -->
            <!-- FORM PER MODIFICARE COMIC -->
            <form method="POST" action="{{ route('comics.update', $comic) }}">
                @csrf
                @method('PUT')

                {{-- ERRORI LARAVEL --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{-- ERRORI LARAVEL --}}

                <div class="row">
                    <div class="mb-3 col">
                        <!-- TITOLO -->
                        <label for="title" class="form-label">Title</label>
                        <input name="title" type="text" class="form-control" id="title" placeholder="Insert title"
                            value="{{ old('title', $comic['title']) }}">
                    </div>
                    <!-- TITOLO -->
                    <!-- SERIES -->
                    <div class="mb-3 col">
                        <label for="series" class="form-label">Series</label>
                        <input name="series" type="text" class="form-control" id="series" placeholder="Insert series"
                            value="{{ old('series', $comic['series']) }}">
                    </div>
                    <!-- /SERIES -->
                    <!-- TYPE -->
                    <div class="mb-3 col">
                        <label for="type" class="form-label">Type</label>
                        <input name="type" type="text"
                            class="form-control @error('type')
                            is-invalid
                        @enderror"
                            id="type" placeholder="Insert type" value="{{ old('type', $comic['type']) }}">
                    </div>
                    <!-- /TYPE -->
                </div>
                {{-- ERRORI SOLO PER IL CAMPO TYPE --}}
                @error('type')
                    @foreach ($errors->get('type') as $error)
                        <div class="alert alert-danger">
                            {{ $error }}
                        </div>
                    @endforeach
                @enderror
                {{-- ERRORI SOLO PER IL CAMPO TYPE --}}
                <div class="row">
                    <!-- THUMB -->
                    <div class="mb-3 col">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input name="thumb" type="text" class="form-control" id="thumb" placeholder="Insert thumb"
                            value="{{ old('thumb', $comic['thumb']) }}">
                    </div>
                    <!-- /THUMB -->
                    <!-- SALE DATE -->
                    <div class="mb-3 col">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input name="sale_date" type="date" class="form-control" id="sale_date"
                            placeholder="Insert Sale Date" value="{{ old('sale_date', $comic['sale_date']) }}">
                    </div>
                    <!-- /SALE DATE -->
                    <!-- PRICE -->
                    <div class="mb-3 col">
                        <label for="price" class="form-label">Price</label>
                        <input name="price" type="number" class="form-control" id="price" placeholder="Insert price"
                            step="0.01" value="{{ old('price', $comic['price']) }}">
                    </div>
                    <!-- /PRICE -->
                </div>
                <div class="row">
                    <!-- ARTISTS -->
                    <div class="mb-3 col">
                        <label for="artists" class="form-label">Artists</label>
                        <input name="artists" type="text" class="form-control" id="artists"
                            placeholder="Insert Artists" value="{{ old('artists', $comic['artists']) }}">
                    </div>
                    <!-- /ARTISTS -->
                    <!-- WRITERS -->
                    <div class="mb-3 col">
                        <label for="writers" class="form-label">Writers</label>
                        <input name="writers" type="text" class="form-control" id="writers"
                            placeholder="Insert Writers" value="{{ old('writers', $comic['writers']) }}">
                    </div>
                    <!-- /WRITERS -->
                </div>
                <!-- DESCRIPTION -->
                <label for="description" class="mb-2">Description</label>
                <textarea class="form-control mb-3" placeholder="Leave your description" id="description" name="description"
                    style="height: 200px">{{ old('description', $comic['description']) }}</textarea>
                <!-- /DESCRIPTION -->
                <!-- SUBMIT  -->
                <button type="submit" class="btn btn-primary">Submit</button>
                <!-- /SUBMIT  -->
            </form>
            <!-- FORM PER MODIFICARE COMIC -->
        </div>
    </main>
    <!-- /MAIN -->
@endsection
