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
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name">Nom:</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $destination->name }}" required>
                        </div>
                    </div>
                   <div class="col-sm-6">
                        <label for="images">Images</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" value="{{ $destination->images }}" name="images[]" id="images" multiple accept="image/*">
                            <label class="custom-file-label" for="customFile">Choisir les images</label>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea name="description" id="description" class="form-control" required>{{ $destination->description }}</textarea>
                        </div>
                    </div>

                    <!-- Add other form fields for editing -->

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                        <a href="{{ route('destinations.index') }}" class="btn btn-secondary">Annuler</a>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
@endsection

