@extends('admin.layout.layout')
@section('content')

    <div class="container">
        <h1>Détails de l'destination</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $destination->name }}</h5>
                <p class="card-text">{{ $destination->description }}</p>

                <ul>
                    <li><strong>Localisation:</strong> {{ $destination->localisation }}</li>
                    <li><strong>Étoiles:</strong> {{ $destination->etoiles }} étoiles</li>
                    <li><strong>Prix:</strong> {{ number_format($destination->prix, 0, ',', ' ') }} CFA</li>
                </ul>

                <div class="mb-3">
                    <strong>Images:</strong>
                    @if (is_array($destination->images) && count($destination->images) > 0)
                        @foreach ($destination->images as $image)
                            <img src="{{ asset('storage/' . $image) }}" width="200px" alt="destination Image">
                        @endforeach
                    @else
                        <p>Aucune image disponible pour ce tour.</p>
                    @endif
                </div>

                <a href="{{ route('destinations.index') }}" class="btn btn-primary">Retour à la liste</a>
            </div>
        </div>
    </div>

@endsection
