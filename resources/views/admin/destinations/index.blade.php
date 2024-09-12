@extends('admin.layout.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h4>Liste des Destinations</h4>
                <a href="{{ route('destinations.create') }}" class="btn btn-success btn-sm">Ajouter une Destination</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Description</th>
                            {{-- <th>Localisation</th>
                            <th>Étoiles</th>
                            <th>Prix</th> --}}
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($destinations as $destination)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $destination->name }}</td>
                                <td>{{ $destination->description }}</td>
                                {{-- <td>{{ $destination->localisation }}</td>
                                <td>{{ $destination->etoiles }}</td>
                                <td>{{ $destination->prix }}</td> --}}
                                <td>
                                    <a href="{{ route('destinations.show', $destination->id) }}" class="btn btn-info btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('destinations.edit', $destination->id) }}"
                                        class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('destinations.destroy', $destination->id) }}" method="post"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet Destination?')">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
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
