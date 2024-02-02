@extends('layouts.app')


@section('main')
    <!-- MAIN -->
    <main>
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <h2 class="text-center py-2">General Comics List</h2>
                <button class="btn btn-primary">
                    <a href="{{ route('comics.create') }}" class="text-white text-decoration-none">Add a Comic</a>
                </button>
            </div>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>

                        <th>Id</th>
                        <th>Title</th>
                        <th>Series</th>
                        <th>Details</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <td>{{ $comic['id'] }}</td>
                            <td>{{ $comic['title'] }}</td>
                            <td>{{ $comic['series'] }}</td>
                            <td>
                                <a href="{{ route('comics.show', $comic) }}" class="text-decoration-none">Go to
                                    Details</a>
                            </td>
                            <td>
                                <a href="{{ route('comics.edit', $comic) }}" class="text-decoration-none">Edit Comic</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    <!-- /MAIN -->
@endsection
