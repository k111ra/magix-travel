@extends('admin.layout.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Détails du vol</h4>
        </div>
        <div class="card-body">
            <p><strong>Compagnie Aérienne: </strong> {{ $vol->compagnie_aerienne }}</p>
            <p><strong>Départ: </strong> {{ $vol->depart->name }}</p>
            <!-- Affichez d'autres détails du vol ici -->
        </div>
    </div>
@endsection
