@extends('admin.layout.layout')
@section('content')
<div class="container">
    <div class="card" id="add-Destination-card">
        <form action="{{ route('type.store') }}" method="post">
            @csrf

            <div class="card-header">
                <h4>Ajouter un type de reservation</h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="name">Nom:</label>
                            <input type="text" name="nom"  class="form-control" required>
                            @error('nom')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </form>
    </div>
</div>
@endsection

