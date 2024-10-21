@extends('admin.layout.layout')
@section('content')
<section class="section">
    <div class="section-body">
      <div class="row">
  
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Liste des Rôles</h4>
          </div>
          <div class="card-body">
            <div class="float-left">
              <a href=" {{route('create.role')}} " type="button" class="btn btn-primary">Nouveau</a>
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
                  <th>Création</th>
                  <th>Action</th>
                </tr >
                @forelse ($roles as $role)
                    <tr>
                        <td style="padding: 10px;">{{ $loop->iteration }}</td>
                        <td style="padding: 10px;">{{ $role->name }}</td>
                        <td style="padding: 10px;">{{ $role->created_at }}</td>

                        <td width="150px">
                            <a type="button" href="{{ route('show.role', $role->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye" title="Assigner Permission"></i></a>
                            <a type="button" href="{{ route('edit.role', $role->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt" title="Modifier"></i></a>
                            <form action="{{ route('destroy.role', $role->id) }}" method="post"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce role ?')">
                                    <i class="fas fa-trash-alt"></i>
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