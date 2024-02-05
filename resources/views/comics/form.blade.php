@extends('layouts.app')

@section('main')
    <!-- MAIN -->
    <main class="pt-2 pb-4">
        <div class="container">
            <!-- TITOLO SEZIONE E BUTTON PER TORNARE ALLA LISTA COMIC -->
            <div class="d-flex align-items-center justify-content-between">
                <h2 class="text-center py-2">Comic Create</h2>
                <button class="btn btn-primary p-0">
                    <a href="{{ route('comics.index') }}" class="text-white text-decoration-none d-block py-1 px-3">
                        Back to Comics List
                    </a>
                </button>
            </div>
            <!-- /TITOLO SEZIONE E BUTTON PER TORNARE ALLA LISTA COMIC -->
            <!-- FORM PER AGGIUNGERE COMIC AL DB -->
            <form method="POST" action="{{ route('comics.store') }}">
                @csrf

                {{-- ERRORI LARAVEL TUTTI --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{-- ERRORI LARAVEL TUTTI --}}

                <div class="row">
                    <!-- TITOLO -->
                    <div class="mb-3 col">
                        <label for="title" class="form-label">Title</label>
                        <input name="title" type="text" class="form-control @error('title') is-invalid @enderror"
                            id="title" placeholder="Insert title" required value='{{ old('title') }}'>
                    </div>
                    <!-- /TITOLO -->
                    <!-- SERIES -->
                    <div class="mb-3 col">
                        <label for="series" class="form-label">Series</label>
                        <input name="series" type="text" class="form-control" id="series" placeholder="Insert series"
                            required value='{{ old('series') }}'>
                    </div>
                    <!-- /SERIES -->
                    <!-- TYPE -->
                    <div class="mb-3 col">
                        <label for="type" class="form-label">Type</label>
                        <input name="type" type="text" class="form-control" id="type" placeholder="Insert type"
                            required value='{{ old('type') }}'>
                    </div>
                    <!-- /TYPE -->
                </div>
                {{-- ERRORI SOLO PER IL CAMPO TITLE --}}
                @error('title')
                    @foreach ($errors->get('title') as $error)
                        <div class="alert alert-danger">
                            {{ $error }}
                        </div>
                    @endforeach
                @enderror
                {{-- ERRORI SOLO PER IL CAMPO TITLE --}}
                <div class="row">
                    <!-- THUMB -->
                    <div class="mb-3 col">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input name="thumb" type="text" class="form-control" id="thumb" placeholder="Insert thumb"
                            required value='{{ old('thumb') }}'>
                    </div>
                    <!-- /THUMB -->
                    <!-- SALE DATE -->
                    <div class="mb-3 col">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input name="sale_date" type="date" class="form-control" id="sale_date"
                            placeholder="Insert Sale Date" required value='{{ old('sale_date') }}'>
                    </div>
                    <!-- /SALE DATE -->
                    <!-- PRICE -->
                    <div class="mb-3 col">
                        <label for="price" class="form-label">Price</label>
                        <input name="price" type="number" class="form-control" id="price" placeholder="Insert price"
                            step="0.01" required value='{{ old('price') }}'>
                    </div>
                    <!-- /PRICE -->
                </div>
                <div class="row">
                    <!-- ARTISTS -->
                    <div class="mb-3 col">
                        <label for="artists" class="form-label">Artists</label>
                        <input name="artists" type="text" class="form-control" id="artists"
                            placeholder="Insert Artists" required value='{{ old('artists') }}'>
                    </div>
                    <!-- /ARTISTS -->
                    <!-- WRITERS -->
                    <div class="mb-3 col">
                        <label for="writers" class="form-label">Writers</label>
                        <input name="writers" type="text" class="form-control" id="writers"
                            placeholder="Insert Writers" required value='{{ old('writers') }}'>
                    </div>
                    <!-- /WRITERS -->
                </div>
                <!-- DESCRIPTION -->
                <label for="description" class="mb-2">Description</label>
                <textarea class="form-control mb-3" placeholder="Leave your description" id="description" name="description"
                    style="height: 200px" required>{{ old('description') }}</textarea>
                <!-- /DESCRIPTION -->
                <!-- SUBMIT E RESET -->
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary ms-3">Reset</button>
                <!-- /SUBMIT E RESET -->
            </form>
            <!-- /FORM PER AGGIUNGERE COMIC AL DB -->
        </div>
    </main>
    <!-- /MAIN -->
@endsection
