@extends('layouts.app')


@section('main')
    <!-- MAIN -->
    <main>
        <div class="container">
            <h2 class="text-center py-2">General Comics List</h2>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>

                        <th>Id</th>
                        <th>Title</th>
                        <th>Series</th>
                        <th>Type</th>
                        <th>Price</th>
                        <th>Sale Date</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <td>{{ $comic['id'] }}</td>
                            <td>{{ $comic['title'] }}</td>
                            <td>{{ $comic['series'] }}</td>
                            <td>{{ $comic['type'] }}</td>
                            <td>{{ $comic['price'] }} $</td>
                            <td>{{ $comic['sale_date'] }}</td>
                            <td>
                                {{-- se in show del controller passo solo l'id non posso usare la route qua e devo scriverlo tipo a mano --}}
                                {{-- <a href="{{ "/comics/{$comic['id']}" }}">Go to details</a> --}}
                                <a href="{{ route('comics.show', $comic->id) }}">Go to Details</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    <!-- /MAIN -->
@endsection
