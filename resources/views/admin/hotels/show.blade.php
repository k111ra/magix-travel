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
                    @if (is_array($hotel->images))
                        @foreach ($hotel->images as $image)
                            <img src="{{ asset('storage/' . $image) }}" width="200px" alt="Hotel Image" class="img-thumbnail">
                        @endforeach
                    @endif
                </div>


                <a href="{{ route('hotels.index') }}" class="btn btn-primary">Retour à la liste</a>
            </div>
        </div>
    </div>

@endsection
