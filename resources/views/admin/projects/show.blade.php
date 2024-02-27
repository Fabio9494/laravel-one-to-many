@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Dashboard') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col">

                <table class="table table-primary table-striped  p-3 border  mt-4">
                    <thead class="">
                        <tr>
                            <th>TITOLO</th>
                            <th>DATA</th>
                            <th>DESCRIZIONE</th>
                            <th>AUTORE</th>
                            <th>SLAG</th>
                            <th>TOOLS</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>{{ $project['title'] }}</td>
                            <td>{{ date('d/m/Y', strtotime($project['date'])) }}</td>
                            <td>{{ $project['description'] }}</td>
                            <td>{{ $project['author'] }}</td>
                            <td>{{ $project['slug'] }}</td>
                            <td><a href="{{ route('adminprojects.show', ['project' => $project->id]) }}"
                                    class="btn btn-square btn-primary"><i class="fas fa-eye"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div>
                    <img src="{{ $project->img !== null ? asset('/storage/' . $project->img) : '/img/imgnull.jpg' }}"
                        alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
