@extends('admin.layout.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h4>Liste des réservations de vols</h4>
                
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>De</th>
                            <th>Vers</th>
                            {{-- <th>Type</th> --}}
                            <th>Date de réservation</th>
                            <th>Téléphone</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th width="150px">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($listesvols as $reservation)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                {{-- <td>{{ optional($reservation->tour)->nom }}</td>
                                <td>{{ optional($reservation->hotel)->name }}</td>
                                <td>{{ optional($reservation->vol)->compagnie_aerienne }}</td> --}}
                                <td>{{ $reservation->destination_depart }}</td>
                                <td>{{ $reservation->destination_final }}</td>
                                {{-- <td> {{ number_format($reservation->amount, 0, ',', ' ') }} FCFA  </td> --}}
                                <td>{{ $reservation->created_at }}</td> 
                                <td>{{ $reservation->contact }}</td>
                                <td>{{ $reservation->email }}</td>
                                <td>
                                    @if ($reservation->status === 'initialiser')
                                    <span class="badge badge-secondary">Initialisation</span>
                                    @elseif ($reservation->status === 'traiter')
                                    <span class="badge badge-primary">Traitement</span>
                                     @elseif ($reservation->status === 'valider')
                                    <span class="badge badge-success">Valider</span>
                                    @else
                                    <span class="badge badge-danger">Annuler</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('reservations.show', $reservation->id) }}" class="btn btn-info btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    {{-- Traitement --}}
                                    @if ($reservation->status !== 'annuler' && $reservation->status !== 'valider' && $reservation->status !== 'traiter')
                                        <form action="{{ route('traitement.reservation.vols', $reservation->id) }}" method="post"
                                            style="display: inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-primary btn-sm"
                                                onclick="return confirm('Êtes-vous sûr de vouloir commencer le traitement de cette réservation?')">
                                                <i class="fas fa-highlighter" title="Traitement"></i>
                                            </button>
                                        </form>
                                    @endif
                                    
                                    {{-- Valider --}}
                                    @if ($reservation->status == 'traiter')
                                        <form action="{{ route('valider.reservation.vols', $reservation->id) }}" method="post"
                                            style="display: inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-success btn-sm"
                                                onclick="return confirm('Êtes-vous sûr de vouloir valider cette réservation?')">
                                                <i class="fas fa-handshake" title="Valider"></i>
                                            </button>
                                        </form>
                                    @endif

                                    {{-- Annuller --}}
                                    @if ($reservation->status !== 'valider' && $reservation->status !== 'annuler')
                                        <form action="{{ route('annuler.reservation.vols', $reservation->id) }}" method="post"
                                            style="display: inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Êtes-vous sûr de vouloir annuler cette réservation?')">
                                                <i class="fas fa-trash-alt" title="Annuler la reservation"></i>
                                            </button>
                                        </form>
                                    @endif

                                    {{-- Restaurer --}}
                                    @if ($reservation->status == 'valider')
                                        <form action="{{ route('restaurer.reservation.vols', $reservation->id) }}" method="post"
                                            style="display: inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-warning btn-sm"
                                                onclick="return confirm('Êtes-vous sûr de vouloir annuler cette réservation?')">
                                                <i class="fas fa-circle-notch" title="Restaurer tous"></i>
                                            </button>
                                        </form>
                                    @endif
                                    
                                </td>
                            </tr>
                       @empty
                        <tr>
                            <td colspan="6" class="text-center text-danger">Aucune Données disponible pour le moment</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
