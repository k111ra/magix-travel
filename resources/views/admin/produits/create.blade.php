@extends('admin.layout.layout')
@section('content')
<section class="section">
    <div class="container mt-0">
      <div class="row">
        <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
          <div class="card card-primary">
            <div class="card-header">
              <h4>Register</h4>
            </div>
            <div class="card-body">
              <form method="POST">
                
                  <div class="form-group">
                    <label for="frist_name">Reference</label>
                    <input id="reference" type="text" class="form-control" name="reference" autofocus>
                  </div>
                  <div class="form-group">
                    <label for="last_name">Designation</label>
                    <input id="designation" type="text" class="form-control" name="designation">
                  </div>
                <div class="form-group">
                  <label for="email">Prix unitaire</label>
                  <div class="input-group-prepend">
                          <div class="input-group-text">
                            $
                         </div>
                  <input id="prixUnitaire" type="number" class="form-control" name="prixUnitaire">
                  
                </div>
                </div>
                <div class="form-group">
                    <label for="last_name">Quantité</label>
                    <input id="quantite" type="number" class="form-control" name="quantite">
                  </div>
                <div class="form-group">
                      <label>Catégorie</label>
                      <select class="form-control select2">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                        <option>Option 4</option>
                        <option>Option 5</option>
                        <option>Option 6</option>
                      </select>
                    </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block">
                    Register
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection