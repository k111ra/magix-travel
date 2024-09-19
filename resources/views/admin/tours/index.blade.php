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
                <h4>Liste des Tours</h4>
                <a href="{{ route('tours.create') }}" class="btn btn-success btn-sm">Ajouter un Tour</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Durée</th>
                            <th>Prix</th>
                            <th>Destination</th>
                            <th>Places disponibles</th>
                            <th>Date de départ</th>
                            <th>Moyen de transport</th>
                            {{-- <th>Images</th> --}}
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tours as $tour)
                            <tr style="cursor: pointer;" onclick="selectRow(this)">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $tour->nom }}</td>
                                <td>{{ $tour->duree }} jour(s)</td>
                                <td>{{ number_format($tour->prix, 0, ',', ' ') }} FCFA</td>
                                <td>{{ $tour->destinations->name }}</td>
                                <td>{{ $tour->place }}</td>
                                <td>{{ $tour->date_depart }}</td>
                                <td>{{ $tour->moyen_transport }}</td>
                                {{-- <td>
                                    @if (is_array($tour->images))
                                        @foreach ($tour->images as $image)
                                            <img src="{{ asset('storage/' . $image) }}" width="50px" alt="Tour Image" class="img-thumbnail">
                                        @endforeach
                                    @endif
                                </td> --}}
                                <td>
                                    <a href="{{ route('tours.show', $tour->id) }}" class="btn btn-info btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('tours.edit', $tour->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('tours.destroy', $tour->id) }}" method="post"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce tour?')">
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
