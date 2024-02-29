
@extends('admin.layout.layout')
@section('content')

<div class="container">
    <h1>Modifier le Tour</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('tours.update', $tour->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Add form fields for editing tour details -->
                <div class="form-group">
                    <label for="nom">Nom:</label>
                    <input type="text" name="nom" id="nom" class="form-control" value="{{ $tour->nom }}" required>
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" id="description" class="form-control" required>{{ $tour->description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="duree">Durée (en jours):</label>
                    <input type="number" name="duree" id="duree" class="form-control" value="{{ $tour->duree }}" required>
                </div>

                <div class="form-group">
                    <label for="prix">Prix:</label>
                    <input type="number" name="prix" id="prix" class="form-control" value="{{ $tour->prix }}" required>
                </div>

                <div class="form-group">
                    <label for="destination">Destination:</label>
                    <input type="text" name="destination" id="destination" class="form-control" value="{{ $tour->destination }}" required>
                </div>

                <div class="form-group">
                    <label for="place">Places disponibles:</label>
                    <input type="number" name="place" id="place" class="form-control" value="{{ $tour->place }}" required>
                </div>

                <div class="form-group">
                    <label for="date_depart">Date de départ:</label>
                    <input type="date" name="date_depart" id="date_depart" class="form-control" value="{{ $tour->date_depart }}" required>
                </div>

                <div class="form-group">
                    <label for="moyen_transport">Moyen de transport:</label>
                    <input type="text" name="moyen_transport" id="moyen_transport" class="form-control" value="{{ $tour->moyen_transport }}" required>
                </div>

                <div class="form-group">
                    <label for="images">Images:</label>
                    <input type="file" name="images[]" id="images" multiple accept="image/*" class="form-control-file">
                </div>

                <!-- Add other form fields for editing -->

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                    <a href="{{ route('tours.index') }}" class="btn btn-secondary">Annuler</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
