@extends('layouts.app')

@section('main')
    <!-- MAIN -->
    <main class="pt-1 pb-4">
        <div class="container">
            <!-- TITOLO COMIC E BUTTON PER TORNARE PAGINA COMICS -->
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h2 class="text-center py-2">{{ $comic['title'] }}</h2>
                <button class="btn btn-primary p-0">
                    <a href="{{ route('comics.index') }}" class="text-white text-decoration-none d-block py-2 px-3">Back to
                        Comics List</a>
                </button>
            </div>
            <!-- /TITOLO COMIC E BUTTON PER TORNARE PAGINA COMICS -->
            <!-- IMMAGINE E DATI DI DETTAGLIO COMIC -->
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
                    <h6 class="mb-1">Price</h6>
                    <p class="mb-3 fs-6">{{ $comic['price'] }} $</p>
                    <h6 class="mb-1">Sale Date</h6>
                    <p class="mb-3 fs-6">{{ $comic['sale_date'] }}</p>
                    <h6 class="mb-1">Description</h6>
                    <p class="mb-3 fs-6">{{ $comic['description'] }}</p>
                    <h6 class="mb-1">Artists</h6>
                    <p class="mb-3 fs-6">{{ implode(', ', explode(',', $comic['artists'])) }}</p>
                    <h6 class="mb-1">Writers</h6>
                    <p class="mb-3 fs-6">{{ implode(', ', explode(',', $comic['writers'])) }}</p>
                </div>
            </div>
            <!-- IMMAGINE E DATI DI DETTAGLIO COMIC -->
        </div>
    </main>
    <!-- /MAIN -->
@endsection
