@extends('admin.layout.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Modifier la réservation</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="first_name">Prénom</label>
                    <input type="text" name="first_name" class="form-control" id="first_name"
                        value="{{ $reservation->first_name }}">
                </div>
                <div class="form-group">
                    <label for="last_name">Nom</label>
                    <input type="text" name="last_name" class="form-control" id="last_name"
                        value="{{ $reservation->last_name }}">
                </div>
                <div class="form-group">
                    <label for="phone_number">Numéro de téléphone</label>
                    <input type="text" min="0" name="phone_number" class="form-control" id="phone_number"
                        value="{{ $reservation->phone_number }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email"
                        value="{{ $reservation->email }}">
                </div>
                <div class="form-group">
                    <label for="reservation_date">Date de réservation</label>
                    <input type="date" name="reservation_date" class="form-control" id="reservation_date"
                        value="{{ $reservation->reservation_date }}">
                </div>
                <div class="form-group">
                    <label for="amount">Montant</label>
                    <input type="number" name="amount" class="form-control" id="amount"
                        value="{{ $reservation->amount }}">
                </div>
                <div class="form-group">
                    <label for="num_persons">Nombre de personnes</label>
                    <input type="number" min="0" name="num_persons" class="form-control" id="num_persons"
                        value="{{ $reservation->num_persons }}">
                </div>
                <div class="form-group">
                    <label for="tour_id">Tour</label>
                    <select name="tour_id" class="form-control" id="tour_id">
                        <option value="">Sélectionner un tour</option>
                        @foreach ($tours as $tour)
                            <option value="{{ $tour->id }}" @if ($tour->id == $reservation->tour_id) selected @endif>
                                {{ $tour->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="hotel_id">Hôtel</label>
                    <select name="hotel_id" class="form-control" id="hotel_id">
                        <option value="">Sélectionner un hôtel</option>
                        @foreach ($hotels as $hotel)
                            <option value="{{ $hotel->id }}" @if ($hotel->id == $reservation->hotel_id) selected @endif>
                                {{ $hotel->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="vol_id">Vol</label>
                    <select name="vol_id" class="form-control" id="vol_id">
                        <option value="">Sélectionner un vol</option>
                        @foreach ($vols as $vol)
                            <option value="{{ $vol->id }}" @if ($vol->id == $reservation->vol_id) selected @endif>
                                {{ $vol->compagnie_aerienne }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Mettre à jour</button>
            </form>
        </div>
    </div>
@endsection
