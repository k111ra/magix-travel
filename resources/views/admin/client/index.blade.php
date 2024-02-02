@extends('admin.layout.layout')
@section('content')
<section class="section">
  <div class="section-body">
    <div class="row">

    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Liste des Clients</h4>
        </div>
        <div class="card-body">
          <div class="float-left">
            <a href=" {{route('client.create')}} " type="button" class="btn btn-primary">Nouveau</a>
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
                <th>Nom</th>
                <th>Prenoms</th>
                <th>Sexe</th>
                <th>Email</th>
                <th>Créer Par</th>
                <th>Created At</th>
                <th>Action</th>
              </tr>
              <tr>
                <td>1</td>
                <td>Kouakou</td>
                <td>Abdoul</td>
                <td>Feminin</td>
                <td>dev@gmail.com</td>
                <td>Admin</td>
                <td>10-02-2019</td>
                <td>
                    <a type="button" href="" class="btn btn-xs"><i style="color: rgb(241, 211, 10)" class="fas fa-pencil-alt" title="Modifier"></i></a>
                    <a type="button" href="" class="btn btn-xs"><i style="color: blue" class="fas fa-eye" title="Supprimer"></i></a>
                    <a type="button" href="" class="btn btn-xs"><i style="color: red" class="fas fa-trash-alt" title="Delete"></i></a>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Kouakou</td>
                <td>Abdoul</td>
                <td>Feminin</td>
                <td>dev@gmail.com</td>
                <td>Admin</td>
                <td>10-02-2019</td>
                <td>
                  <a type="button" href="" class="btn btn-xs"><i style="color: rgb(241, 211, 10)" class="fas fa-pencil-alt" title="Modifier"></i></a>
                  <a type="button" href="" class="btn btn-xs"><i style="color: blue" class="fas fa-eye" title="Supprimer"></i></a>
                  <a type="button" href="" class="btn btn-xs"><i style="color: red" class="fas fa-trash-alt" title="Delete"></i></a>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Kouakou</td>
                <td>Abdoul</td>
                <td>Feminin</td>
                <td>dev@gmail.com</td>
                <td>Admin</td>
                <td>10-02-2019</td>
                <td>
                     <a type="button" href="" class="btn btn-xs"><i style="color: rgb(241, 211, 10)" class="fas fa-pencil-alt" title="Modifier"></i></a>
                  <a type="button" href="" class="btn btn-xs"><i style="color: blue" class="fas fa-eye" title="Supprimer"></i></a>
                  <a type="button" href="" class="btn btn-xs"><i style="color: red" class="fas fa-trash-alt" title="Delete"></i></a>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
 </div>
    </div>
  </section>
  @endsection