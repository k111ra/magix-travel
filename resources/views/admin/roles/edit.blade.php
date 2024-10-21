@extends('admin.layout.layout')
@section('content')
<div class="container">
    <div class="card" id="add-tour-card">
        <form action="{{route('update.role', $role->id)}}" method="post">
            @csrf

            <div class="card-header">
                <h4>Modifier un role</h4>
            </div>
            <div class="card-body">                    
                  <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="libelle">Libéllé:</label>
                                <input type="text" name="name" value= "{{$role->name}}" id="libelle" class="form-control" required>
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