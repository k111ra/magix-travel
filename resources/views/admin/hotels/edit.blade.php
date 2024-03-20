
@extends('admin.layout.layout')
@section('content')
    <div class="container">
        <h1>Modifier l'Hotel</h1>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('hotels.update', $hotel->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Add form fields for editing hotel details -->
                    <div class="form-group">
                        <label for="name">Nom:</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $hotel->name }}" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea name="description" id="description" class="form-control" required>{{ $hotel->description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="localisation">Localisation:</label>
                        <input type="text" name="localisation" id="localisation" class="form-control" value="{{ $hotel->localisation }}">
                    </div>

                    <div class="form-group">
                        <label for="etoiles">Étoiles:</label>
                        <input type="number" name="etoiles" id="etoiles" class="form-control" value="{{ $hotel->etoiles }}">
                    </div>

                    <div class="form-group">
                        <label for="prix">Prix:</label>
                        <input type="number" name="prix" id="prix" class="form-control" value="{{ $hotel->prix }}" required>
                    </div>

                    <div class="form-group">
                        <label for="images">Images:</label>
                        <input type="file" name="images[]" id="images" multiple accept="image/*" class="form-control-file">
                        @error('images[]')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Add other form fields for editing -->

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                        <a href="{{ route('hotels.index') }}" class="btn btn-secondary">Annuler</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
