
@extends('admin.layout.layout')
@section('content')
    <div class="container">
        <div class="card" id="add-tour-card">
            <form action="{{ route('vols.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    <h4>Ajouter un vol</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="compagnie_aerienne">Compagnie Aérienne</label>
                                        <input type="text" name="compagnie_aerienne" class="form-control" id="compagnie_aerienne">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="prix">Prix</label>
                                        <input type="text" name="prix" class="form-control" id="prix" >
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="date_depart">Date de départ</label>
                                        <input type="datetime-local" name="date_depart" class="form-control" id="date_depart">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="depart_id">Départ</label>
                                        <select name="depart_id" class="form-control" id="depart_id" >
                                            @foreach ($destinations as $destination)
                                                <option value="{{ $destination->id }}">{{ $destination->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="destination_id">Destination</label>
                                        <select name="destination_id" class="form-control" id="destination_id">
                                            @foreach ($destinations as $destination)
                                                <option value="{{ $destination->id }}">{{ $destination->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Ajouter le Tour</button>
                </div>
            </form>
        </div>
    </div>
@endsection
