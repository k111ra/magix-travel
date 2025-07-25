@extends('admin.layout.layout')
@section('content')
    @php
        $status = ['activé', 'désactivé'];
    @endphp
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="container">
        <h1>Modifier le Tour</h1>

        <div class="card">
            <form action="{{ route('tours.update', $tour->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">

                    <!-- Add form fields for editing tour details -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nom">Nom:</label>
                                <input type="text" name="nom" id="nom" class="form-control"
                                    value="{{ $tour->nom ?? '' }}" required>
                            </div>

                            <div class="form-group">
                                <label for="duree">Durée (en jours):</label>
                                <input type="number" min="0" name="duree" id="duree" class="form-control"
                                    value="{{ $tour->duree }}" required>
                            </div>

                            <div class="form-group">
                                <label for="prix">Prix:</label>
                                <input type="number" min="0" name="prix" id="prix" class="form-control"
                                    value="{{ $tour->prix }}" required>
                            </div>

                            <div class="form-group">
                                <label for="depart_id">Destination</label>
                                <select name="destinations_id" class="form-control" id="destinations_id">
                                    <option value="{{ $tour->destination }}">Selectionner...</option>
                                    @foreach ($destination as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $tour->destinations && $data->id == $tour->destinations->id ? 'selected' : '' }}>
                                            {{ $data->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="depart_id">Type Tour</label>
                                <select name="type_tours_id" class="form-control" id="type_tours_id">
                                    <option value="">Selectionner...</option>
                                    @foreach ($types as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $tour->typeTour && $data->id == $tour->typeTour->id ? 'selected' : '' }}>
                                            {{ $data->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="images">Status</label>
                                <select name="status" class="form-control" id="status">
                                    @foreach ($status as $status)
                                        <option value="{{ $status }}"
                                            {{ old('status', $tour->status) == $status ? 'selected' : '' }}>
                                            {{ $status }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="place">Places disponibles:</label>
                                <input type="number" min="0" name="place" id="place" class="form-control"
                                    value="{{ $tour->place }}" required>
                            </div>

                            <div class="form-group">
                                <label for="date_depart">Date de départ:</label>
                                <input type="date" name="date_depart" id="date_depart" class="form-control"
                                    value="{{ $tour->date_depart }}" required>
                            </div>

                            <div class="form-group">
                                <label for="moyen_transport">Moyen de transport:</label>
                                <input type="text" name="moyen_transport" id="moyen_transport" class="form-control"
                                    value="{{ $tour->moyen_transport }}" required>
                            </div>

                            <div class="form-group">
                                <label for="images">Images</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" value="{{ $tour->images }}"
                                        id="customFile" name="images[]" id="images" multiple accept="image/*">
                                    <label class="custom-file-label" for="customFile">Choisir les images</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea name="description" id="description" class="form-control" required>{{ $tour->description }}</textarea>
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
