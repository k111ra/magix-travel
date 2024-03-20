@extends('admin.layout.layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h4>Liste des vols</h4>
                <a href="{{ route('vols.create') }}" class="btn btn-success btn-sm">Ajouter un vol</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Compagnie Aerienne</th>
                            <th>Depart</th>
                            <th>Destination</th>
                            <th>Date depart</th>
                            <th>Prix</th>

                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vols as $vol)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $vol->compagnie_aerienne }}</td>
                                <td>{{ $vol->depart->name }}</td>
                                <td>{{ $vol->destination->name }}</td>
                                <td>{{ $vol->date_depart }}</td>
                                <td>{{ $vol->prix }}</td>

                                <td>
                                    <a href="{{ route('vols.show', $vol->id) }}" class="btn btn-info btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('vols.edit', $vol->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('vols.destroy', $vol->id) }}" method="post"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce vol?')">
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
