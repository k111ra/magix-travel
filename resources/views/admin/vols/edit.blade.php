@extends('admin.layout.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Modifier le vol</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('vols.update', $vol->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="compagnie_aerienne">Compagnie Aérienne</label>
                    <input type="text" name="compagnie_aerienne" class="form-control" id="compagnie_aerienne"
                        value="{{ $vol->compagnie_aerienne }}">
                </div>
                <div class="form-group">
                    <label for="depart_id">Départ</label>
                    <!-- Sélectionnez la destination de départ à partir d'une liste déroulante -->
                    <select name="depart_id" class="form-control" id="depart_id">
                        @foreach ($destinations as $destination)
                            <option value="{{ $destination->id }}" @if ($destination->id == $vol->depart_id) selected @endif>
                                {{ $destination->name }}</option>
                        @endforeach
                    </select>
                </div>
                <!-- Ajoutez d'autres champs de formulaire pour les autres attributs du vol -->
                <button type="submit" class="btn btn-primary">Mettre à jour</button>
            </form>
        </div>
    </div>
@endsection
{{-- @extends('admin.layout.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Modifier le vol</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('vols.update', $vol->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="compagnie_aerienne">Compagnie Aérienne</label>
                    <input type="text" name="compagnie_aerienne" class="form-control" id="compagnie_aerienne"
                        value="{{ $vol->compagnie_aerienne }}">
                </div>
                <div class="form-group">
                    <label for="depart_id">Départ</label>
                    <!-- Sélectionnez la destination de départ à partir d'une liste déroulante -->
                    <select name="depart_id" class="form-control" id="depart_id">
                        @foreach ($destinations as $destination)
                            <option value="{{ $destination->id }}" @if ($destination->id == $vol->depart_id) selected @endif>
                                {{ $destination->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="destination_id">Destination</label>
                    <!-- Sélectionnez la destination de départ à partir d'une liste déroulante -->
                    <select name="destination_id" class="form-control" id="destination_id">
                        @foreach ($destinations as $destination)
                            <option value="{{ $destination->id }}" @if ($destination->id == $vol->destination_id) selected @endif>
                                {{ $destination->name }}</option>
                        @endforeach
                    </select>
                </div>
                <!-- Ajoutez d'autres champs de formulaire pour les autres attributs du vol -->
                <button type="submit" class="btn btn-primary">Mettre à jour</button>
            </form>
        </div>
    </div>
@endsection --}}
