@extends('admin.layout.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h4>Liste des réservations hotels</h4>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Date de réservation</th>
                            <th>Montant</th>
                            <th>Nombre de personnes</th>
                            <th>Nom et Prénom</th>
                            <th>Téléphone</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                   {{-- @forelse ($reservations as $reservation)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ optional($reservation->tour)->nom }}</td>
                                <td>{{ optional($reservation->hotel)->name }}</td>
                                <td>{{ optional($reservation->vol)->compagnie_aerienne }}</td>
                                <td>{{ $reservation->reservation_date }}</td>
                                <td> {{ number_format($reservation->amount, 0, ',', ' ') }} FCFA  </td>
                                <td>{{ $reservation->num_persons }}</td>
                                <td>{{ $reservation->first_name }} {{ $reservation->last_name }}</td>
                                <td>{{ $reservation->phone_number }}</td>
                                <td>{{ $reservation->email }}</td>
                                <td>
                                    <a href="{{ route('reservations.show', $reservation->id) }}" class="btn btn-info btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('reservations.edit', $reservation->id) }}"
                                        class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('reservations.destroy', $reservation->id) }}" method="post"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette réservation?')">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                       @empty
                        <tr>
                            <td colspan="6" class="text-center text-danger">Aucune Données disponible pour le moment</td>
                        </tr>
                    @endforelse --}}
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
