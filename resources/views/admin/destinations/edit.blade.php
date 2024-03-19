
@extends('admin.layout.layout')
@section('content')
    <div class="container">
        <h1>Modifier l'destination</h1>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('destinations.update', $destination->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Add form fields for editing destination details -->
                    <div class="form-group">
                        <label for="name">Nom:</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $destination->name }}" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea name="description" id="description" class="form-control" required>{{ $destination->description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="images">Images:</label>
                        <input type="file" name="images[]" id="images" multiple accept="image/*" class="form-control-file">
                    </div>

                    <!-- Add other form fields for editing -->

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                        <a href="{{ route('destinations.index') }}" class="btn btn-secondary">Annuler</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
