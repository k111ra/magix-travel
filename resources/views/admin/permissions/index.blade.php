@extends('admin.layout.layout')
@section('content')
<section class="section">
    <div class="section-body">
      <div class="row">
  
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Liste des Permissions</h4>
          </div>
          <div class="card-body">
            <div class="float-left">
              <a href=" {{route('create.permission')}} " type="button" class="btn btn-primary">Nouveau</a>
            </div>
            <div class="float-right">
              <form>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Recherche">
                  <div class="input-group-append">
                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </form>
            </div>
            <div class="clearfix mb-3"></div>
            <div class="table-responsive">
              <table class="table table-striped">
                <tr>
                  <th>#</th>
                  <th>Libellé</th>
                  <th>Description</th>
                  <th>Création</th>
                  <th>Action</th>
                </tr >
                @forelse ($permissions as $permission)
                    <tr>
                        <td style="padding: 10px;">{{ $loop->iteration }}</td>
                        <td style="padding: 10px;">{{ $permission->name }}</td>
                        <td style="padding: 10px;">{{ $permission->fullname }}</td>
                        <td style="padding: 10px;">{{ $permission->created_at }}</td>

                        <td width="150px">
                            <a type="button" href="{{ route('edit.permission', $permission->id) }}" class="btn btn-xs"><i style="color: rgb(241, 211, 10)" class="fas fa-pencil-alt" title="Modifier"></i></a>
                            <form action="{{ route('destroy.permission', $permission->id) }}" method="post"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-xs"
                                    onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette permissions ?')">
                                    <i class="fas fa-trash-alt" style="color: red"></i>
                                </button>
                            </form>
                            
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center text-danger">Aucune Données disponible pour le moment</td>
                    </tr>
                @endforelse
              </table>
            </div>
          </div>
        </div>
      </div>
   </div>
      </div>
    </section>
@endsection