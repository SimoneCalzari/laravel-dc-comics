@extends('layouts.app')


@section('main')
    <!-- MAIN -->
    <main class="pt-1 pb-4">
        <div class="container">
            <!-- TITOLO TABELLA E BUTTON PER AGGIUNGERE RECORD -->
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h2 class="text-center py-2">General Comics List</h2>
                <button class="btn btn-primary p-0">
                    <a href="{{ route('comics.create') }}" class="text-white text-decoration-none d-block py-2 px-3">
                        Add a Comic
                    </a>
                </button>
            </div>
            <!-- /TITOLO TABELLA E BUTTON PER AGGIUNGERE RECORD -->
            <!-- TABELLA -->
            <table class="table table-bordered border-primary">
                <!-- TABELLA HEAD -->
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Series</th>
                        <th>Details</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        {{-- <th>Prova</th> --}}
                    </tr>
                </thead>
                <!-- /TABELLA HEAD -->
                <!-- TABELLA BODY -->
                <tbody>
                    @foreach ($comics as $comic)
                        <tr class="align-middle">
                            <td>{{ $comic['id'] }}</td>
                            <td>{{ $comic['title'] }}</td>
                            <td>{{ $comic['series'] }}</td>
                            <!-- COLONNA CON LINK PER DETTAGLI COMIC -->
                            <td>
                                <a href="{{ route('comics.show', $comic) }}" class="text-decoration-none">
                                    Comic Details
                                </a>
                            </td>
                            <!-- /COLONNA CON LINK PER DETTAGLI COMIC -->
                            <!-- COLONNA CON LINK PER CAMBIARE DATI COMIC -->
                            <td>
                                <a href="{{ route('comics.edit', $comic) }}" class="text-decoration-none">
                                    Edit Comic
                                </a>
                            </td>
                            <!-- /COLONNA CON LINK PER CAMBIARE DATI DELLA RIGA CORRENTE -->
                            <!-- COLONNA CON FORM E MODALE CON CSS E JS TUTTO DI BOOSTRAP -->
                            {{-- <td>

                                <!-- FORM CANCELLAZIONE RIGA  -->
                                <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <!-- BUTTON CHE APRE LA MODALE -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#modale-delete{{ $comic['id'] }}">
                                        Delete Comic
                                    </button>
                                    <!-- /BUTTON CHE APRE LA MODALE -->
                                    <!-- MODALE -->
                                    <div class="modal fade" id="modale-delete{{ $comic['id'] }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <!-- MODALE HEADER -->
                                                <div class="modal-header">
                                                    <h3 class="modal-title fs-5">Delete Comic Confirmation</h3>
                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal"></button>
                                                </div>
                                                <!-- /MODALE HEADER -->
                                                <!-- MODALE BODY -->
                                                <div class="modal-body">
                                                    <p>Are you sure you want to delete {{ $comic['title'] }}?</p>
                                                </div>
                                                <!-- /MODALE BODY -->
                                                <!-- MODALE FOOTER -->
                                                <div class="modal-footer">
                                                    <!-- BUTTON CHIUSURA MODALE -->
                                                    <button type="button" class="btn btn-primary"
                                                        data-bs-dismiss="modal">No</button>
                                                    <!-- /BUTTON CHIUSURA MODALE -->
                                                    <!-- BUTTON SUBMIT FORM PER CANCELLARE RIGA -->
                                                    <button type="submit" class="btn btn-danger">Yes</button>
                                                    <!-- /BUTTON SUBMIT FORM PER CANCELLARE RIGA -->
                                                </div>
                                                <!-- /MODALE FOOTER -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /MODALE -->
                                </form>
                                <!-- /FORM CANCELLAZIONE RIGA  -->
                            </td> --}}
                            <!-- /COLONNA CON FORM E MODALE CON CSS E JS TUTTO DI BOOSTRAP -->
                            <!-- COLONNA CON FORM E MODALE CON MIO CSS E JS -->
                            <td>
                                <!-- FORM CANCELLAZIONE RIGA  -->
                                <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <!-- BUTTON CHE APRE LA MODALE -->
                                    <div class="btn btn-danger my-button">Delet Comic</div>
                                    <!-- /BUTTON CHE APRE LA MODALE -->
                                    <!--  MODALE -->
                                    <div class="my-modale d-none" id="my-modale-{{ $loop->index }}">
                                        <div class="my-alert p-4 rounded">
                                            <p> Are you sure you want to delete {{ $comic['title'] }}?</p>
                                            <div class="text-end">
                                                <!-- BUTTON CHE CHIUDE LA MODALE -->
                                                <div class="btn btn-primary go-back py-1">No</div>
                                                <!-- /BUTTON CHE CHIUDE LA MODALE -->
                                                <!-- BUTTON SUBMIT FORM PER CANCELLARE RIGA -->
                                                <button type="submit" class="btn btn-danger py-1 proceed ms-2">Yes</button>
                                                <!-- /BUTTON SUBMIT FORM PER CANCELLARE RIGA -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /MODALE -->
                                </form>
                                <!-- /FORM CANCELLAZIONE RIGA  -->
                            </td>
                            <!-- COLONNA CON FORM E MODALE CON MIO CSS E JS -->
                        </tr>
                    @endforeach
                </tbody>
                <!-- /TABELLA BODY -->
            </table>
            <!-- /TABELLA -->
        </div>
    </main>
    <!-- /MAIN -->
@endsection
