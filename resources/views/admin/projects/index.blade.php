@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            PROGETTI
        </h2>
        <div><a href="{{ route('adminprojects.create') }}" class="btn btn-square btn-primary">CREA NUOVO PROGETTO</a>
        </div>
        <div class="row justify-content-center">
            <div class="col">

                <table class="table table-primary table-striped  p-3 border  mt-4">
                    <thead class="">
                        <tr>
                            <th>TITOLO</th>
                            <th>TIPO</th>
                            <th>DATA</th>
                            <th>DESCRIZIONE</th>
                            <th>AUTORE</th>
                            <th>IMG</th>
                            <th>SLAG</th>
                            <th>TOOLS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{ $project['title'] }}</td>
                                <td>{{ $project['type'] != null ? $project['type']['name'] : 'nessun tipo' }}</td>
                                <td>{{ date('d/m/Y', strtotime($project['date'])) }}</td>
                                <td>{{ $project['description'] }}</td>
                                <td>{{ $project['author'] }}</td>
                                <td>{{ $project['img'] }}</td>
                                <td>{{ $project['slug'] }}</td>
                                <td><a href="{{ route('adminprojects.show', ['project' => $project->id]) }}"
                                        class="btn btn-square btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('adminprojects.edit', ['project' => $project->id]) }}"
                                        class="btn btn-square btn-sm btn-warning"><i class="fas fa-edit"></i></a>

                                    <form action="{{ route('adminprojects.destroy', ['project' => $project->id]) }}"
                                        method="POST" onsubmit="return confirm('Eliminare questo elemento?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
