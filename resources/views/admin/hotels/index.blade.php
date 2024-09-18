@extends('admin.layout.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h4>Liste des Hôtels</h4>
                <a href="{{ route('hotels.create') }}" class="btn btn-success btn-sm">Ajouter un Hôtel</a>
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
                            <th>Localisation</th>
                            <th>Destination</th>
                            <th>Étoiles</th>
                            <th>Prix</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hotels as $hotel)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $hotel->name }}</td>
                                <td>{{ $hotel->description }}</td>
                                <td>{{ $hotel->localisation }}</td>
                                <td>{{ $hotel->destination->name }}</td>
                                <td>{{ $hotel->etoiles }}</td>
                                <td>{{ $hotel->prix }}</td>
                                <td>
                                    <a href="{{ route('hotels.show', $hotel->id) }}" class="btn btn-info btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('hotels.edit', $hotel->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('hotels.destroy', $hotel->id) }}" method="post"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet hôtel?')">
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
