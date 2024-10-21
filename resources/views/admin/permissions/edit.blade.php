@extends('admin.layout.layout')
@section('content')
<div class="container">
    <div class="card" id="add-tour-card">
        <form action="{{route('update.permission', $permission->id)}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="card-header">
                <h4>Modifier une permission</h4>
            </div>
            <div class="card-body">                    
                  <div class="row">
                    
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="libelle">Libéllé:</label>
                                <input type="text" name="name" value= "{{$permission->name}}" id="libelle" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="libelle">Description:</label>
                                <input type="text" name="fullname" value= "{{$permission->fullname}}" id="description" class="form-control" required>
                            </div>
                        </div>
                </div>  
            </div>
            <div class="card-footer">
                <a href="{{route('index.permission')}}"><button type="button" class="btn btn-secondary">Retour</button></a>
                <button type="submit" class="btn btn-primary">Ajouter la permission</button>
            </div>
        </form>
    </div>
</div>
  @endsection