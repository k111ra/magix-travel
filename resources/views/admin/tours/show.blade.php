@extends('admin.layout.layout')
@section('content')

    <div class="container">
        <h1>Détails du Tour</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $tour->nom }}</h5>
                <p class="card-text">{{ $tour->description }}</p>

                <ul>
                    <li><strong>Durée:</strong> {{ $tour->duree }} jours</li>
                    <li><strong>Prix:</strong> {{ number_format($tour->prix, 0, ',', ' ') }} CFA </li>
                    <li><strong>Destination:</strong> {{ $tour->destination }}</li>
                    <li><strong>Places disponibles:</strong> {{ $tour->place }}</li>
                    <li><strong>Date de départ:</strong> {{ $tour->date_depart }}</li>
                    <li><strong>Moyen de transport:</strong> {{ $tour->moyen_transport }}</li>
                </ul>

                <div class="mb-3">
                    <strong>Images:</strong>
                    @if (is_array($tour->images) && count($tour->images) > 0)
                        @foreach ($tour->images as $image)
                            <img src="{{ asset('storage/' . $image) }}" width="200px" alt="Tour Image" class="img-thumbnail">
                        @endforeach
                    @else
                        <p>Aucune image disponible pour ce tour.</p>
                    @endif
                </div>



                <a href="{{ route('tours.index') }}" class="btn btn-primary">Retour à la liste</a>
            </div>
        </div>
    </div>

@endsection
