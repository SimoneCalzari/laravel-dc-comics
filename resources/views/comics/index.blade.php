@extends('layouts.app')


@section('main')
    <!-- MAIN -->
    <main>
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <h2 class="text-center py-2">General Comics List</h2>
                <button class="btn btn-primary p-0">
                    <a href="{{ route('comics.create') }}" class="text-white text-decoration-none d-block py-2 px-3">Add a
                        Comic</a>
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
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr class="align-middle">
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
                            <td>
                                <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete Comic</button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    <!-- /MAIN -->
@endsection
