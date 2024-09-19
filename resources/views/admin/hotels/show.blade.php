@extends('admin.layout.layout')
@section('content')

    <div class="container">
        <h1>Détails de l'Hôtel</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $hotel->name }}</h5>
                <p class="card-text">{{ $hotel->description }}</p>

                <ul>
                    <li><strong>Localisation:</strong> {{ $hotel->localisation }}</li>
                    <li><strong>Étoiles:</strong> {{ $hotel->etoiles }} étoiles</li>
                    <li><strong>Prix:</strong> {{ number_format($hotel->prix, 0, ',', ' ') }} CFA</li>
                </ul>
                <div class="mb-3">
                    <strong>Images:</strong>
                    @php
                    // Décoder les images stockées sous forme de JSON
                    $images = json_decode($hotel->images);
                    @endphp
                    @if (is_array($images) && count($images) > 0)
                        @foreach ($images as $image)
                        <img src="{{ asset('storage/' . $image) }}" width="200px" alt="Destination Image" class="img-thumbnail">
                        @endforeach
                    @else
                        <p>Aucune image disponible pour cette destination.</p>
                    @endif
                </div>
                <a href="{{ route('hotels.index') }}" class="btn btn-primary">Retour à la liste</a>
            </div>
        </div>
    </div>

@endsection
