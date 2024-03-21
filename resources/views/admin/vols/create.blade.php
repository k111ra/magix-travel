@extends('admin.layout.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Ajouter un vol</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('vols.store') }}" method="POST">
                @csrf 
                <div class="form_input" style="display:flex; justify-content:space-between;">
                    <div class="form-group">
                        <label for="compagnie_aerienne">Compagnie Aérienne</label>
                        <input type="text" name="compagnie_aerienne" class="form-control" id="compagnie_aerienne" style="width: 300px;">
                    </div>
                    
                    <div class="form-group">
                        <label for="date_depart">Date de départ</label>
                        <input type="datetime-local" name="date_depart" class="form-control" id="date_depart" style="width: 300px;">
                    </div>
                    <div class="form-group">
                        <label for="prix">Prix</label>
                        <input type="text" name="prix" class="form-control" id="prix" style="width: 300px;">
                    </div>
                </div>
                
                <div style="display: flex; justify-content:space-between;">
                    <div class="form-group">
                        <label for="depart_id">Départ</label>
                        <!-- Sélectionnez la destination de départ à partir d'une liste déroulante -->
                        <select name="depart_id" class="form-control" id="depart_id" style="width: 480px;">
                            @foreach ($destinations as $destination)
                                <option value="{{ $destination->id }}">{{ $destination->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="destination_id">Destination</label>
                        <!-- Sélectionnez la destination de départ à partir d'une liste déroulante -->
                        <select name="destination_id" class="form-control" id="destination_id" style="width: 480px;">
                            @foreach ($destinations as $destination)
                                <option value="{{ $destination->id }}">{{ $destination->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- Ajoutez d'autres champs de formulaire pour les autres attributs du vol -->
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
        </div>
    </div>
@endsection
