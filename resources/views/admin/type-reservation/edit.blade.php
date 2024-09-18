
@extends('admin.layout.layout')
@section('content')
    <div class="container">
        <h1>Modifier le type de reservation</h1>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('type.update', $type->id) }}" method="post">
                    @csrf
                    <!-- Add form fields for editing destination details -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="nom">Nom:</label>
                                <input type="text" name="nom" id="nom" class="form-control" value="{{ $type->nom }}" required>
                            </div>
                        </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                                <a href="{{ route('type.index') }}" class="btn btn-secondary">Annuler</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
