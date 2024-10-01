@extends('admin.layout.layout')
@section('content')
<style>
    .selected-row {
        background-color: rgb(241, 180, 105);
        /* Couleur de fond pour les lignes sélectionnées */
    }

</style>
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <h4>Liste des types de tour</h4>
            <a href="{{ route('type.tour.create') }}" class="btn btn-success btn-sm">Nouveau</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Date Création</th>
                        <th width="100px">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($types as $type)
                    <tr style="cursor: pointer;" onclick="selectRow(this)">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $type->nom }}</td>
                        <td>{{ $type->created_at }}</td>
                        <td>
                            <a href="{{ route('type.tour.edit', $type->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('type.tour.destroy', $type->id) }}" method="post" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce type de tour ?')">
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

