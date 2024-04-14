@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Comics</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Artists</th>
                    <th scope="col"></th>
                </tr>
            </thead>

            @foreach ($comics as $comic)
                <tbody>
                    <tr>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->artists }}</td>
                        <td><a href="#" class="btn btn-primary">Visualizza</a></td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection