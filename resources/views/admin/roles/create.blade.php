@extends('admin.layout.layout')
@section('content')
<div class="container">
    <div class="card" id="add-tour-card">
        <form action="{{ route('store.role') }}" method="post">
            @csrf

            <div class="card-header">
                <h4>Ajouter un Rôle</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="libelle">Libéllé:</label>
                            <input type="text" name="name" id="libelle" class="form-control" required>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="card-footer">
                <a href="{{route('index.role')}}"><button type="button" class="btn btn-secondary">Retour</button></a>
                <button type="submit" class="btn btn-primary">Ajouter le rôle</button>
            </div>
        </form>
    </div>
</div>
  @endsection