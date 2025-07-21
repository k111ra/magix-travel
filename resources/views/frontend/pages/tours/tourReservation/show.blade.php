@extends('layouts.layout')
@section('content')
    <div class="container">
        <h1>Détails du Tour</h1>

        <div class="card">
            <div class="card-body">
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
                {{-- <div class="mb-3">
                <strong>Images:</strong>
                @php
                    $images = json_decode($reservation->tour->images);
                @endphp
                @if (is_array($images) && count($images) > 0)
                    @foreach ($images as $image)
                        <img src="{{ asset('storage/' . $image) }}" width="200px" alt="Tour Image" class="img-thumbnail">
                    @endforeach
                @else
                    <p>Aucune image disponible pour ce tour.</p>
                @endif
            </div> --}}

                {{-- <div class="mb-3">
                <strong>Images:</strong>
                @if (is_array($tour->images) && count($tour->images) > 0)
                    @foreach ($tour->images as $image)
                        <img src="{{ asset('storage/' . $image) }}" width="200px" alt="Tour Image" class="img-thumbnail">
                    @endforeach
                @else
                    <p>Aucune image disponible pour ce tour.</p>
                @endif
            </div> --}}

                <a href="{{ route('tours.index') }}" class="btn btn-primary">Retour à la liste</a>
            </div>
        </div>
    </div>
@endsection
