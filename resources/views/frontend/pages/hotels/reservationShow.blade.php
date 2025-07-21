@extends('layouts.layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Détails de la réservation</h4>
        </div>
        <div class="card-body">
            <p><strong>Nom du client: </strong> {{ $reservation->first_name }} {{ $reservation->last_name }}</p>
            <p><strong>Téléphone: </strong> {{ $reservation->phone_number }}</p>
            <p><strong>Email: </strong> {{ $reservation->email }}</p>
            <p><strong>Date de réservation: </strong> {{ $reservation->reservation_date }}</p>
            <p><strong>Montant: </strong> {{ $reservation->amount }}</p>
            <p><strong>Nombre de personnes: </strong> {{ $reservation->num_persons }}</p>
            @if ($reservation->tour)
                <p><strong>Tour: </strong> {{ $reservation->tour->nom }}</p>
            @endif
            @if ($reservation->hotel)
                <p><strong>Hôtel: </strong> {{ $reservation->hotel->name }}</p>
            @endif
            @if ($reservation->vol)
                <p><strong>Compagnie Aérienne: </strong> {{ $reservation->vol->compagnie_aerienne }}</p>
                <p><strong>Départ: </strong> {{ $reservation->vol->depart->name }}</p>
                <!-- Ajoutez d'autres détails du vol ici -->
            @endif
        </div>
        <div class="card-footer">
            <a href="{{ route('reservations.index') }}" class="btn btn-primary">Retour à la liste</a>
        </div>
    </div>
@endsection
