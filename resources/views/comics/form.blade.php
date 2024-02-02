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
                <div class="row">
                    <!-- TITOLO -->
                    <div class="mb-3 col">
                        <label for="title" class="form-label">Title</label>
                        <input name="title" type="text" class="form-control" id="title" placeholder="Insert title">
                    </div>
                    <!-- /TITOLO -->
                    <!-- SERIES -->
                    <div class="mb-3 col">
                        <label for="series" class="form-label">Series</label>
                        <input name="series" type="text" class="form-control" id="series"
                            placeholder="Insert series">
                    </div>
                    <!-- /SERIES -->
                    <!-- TYPE -->
                    <div class="mb-3 col">
                        <label for="type" class="form-label">Type</label>
                        <input name="type" type="text" class="form-control" id="type" placeholder="Insert type">
                    </div>
                    <!-- /TYPE -->
                </div>
                <div class="row">
                    <!-- THUMB -->
                    <div class="mb-3 col">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input name="thumb" type="text" class="form-control" id="thumb" placeholder="Insert thumb">
                    </div>
                    <!-- /THUMB -->
                    <!-- SALE DATE -->
                    <div class="mb-3 col">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input name="sale_date" type="date" class="form-control" id="sale_date"
                            placeholder="Insert Sale Date">
                    </div>
                    <!-- /SALE DATE -->
                    <!-- PRICE -->
                    <div class="mb-3 col">
                        <label for="price" class="form-label">Price</label>
                        <input name="price" type="number" class="form-control" id="price" placeholder="Insert price"
                            step="0.01">
                    </div>
                    <!-- /PRICE -->
                </div>
                <div class="row">
                    <!-- ARTISTS -->
                    <div class="mb-3 col">
                        <label for="artists" class="form-label">Artists</label>
                        <input name="artists" type="text" class="form-control" id="artists"
                            placeholder="Insert Artists">
                    </div>
                    <!-- /ARTISTS -->
                    <!-- WRITERS -->
                    <div class="mb-3 col">
                        <label for="writers" class="form-label">Writers</label>
                        <input name="writers" type="text" class="form-control" id="writers"
                            placeholder="Insert Writers">
                    </div>
                    <!-- /WRITERS -->
                </div>
                <!-- DESCRIPTION -->
                <label for="description" class="mb-2">Description</label>
                <textarea class="form-control mb-3" placeholder="Leave your description" id="description" name="description"
                    style="height: 200px"></textarea>
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
