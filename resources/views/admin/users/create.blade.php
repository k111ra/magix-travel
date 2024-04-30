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
              <form method="POST" action="{{route('user.store')}}">
                @csrf
                <div class="row">
                  <div class="form-group col-6">
                    <label for="frist_name">First Name</label>
                    <input id="frist_name" type="text" class="form-control" name="name" autofocus>
                  </div>
                  {{-- <div class="form-group col-6">
                    <label for="last_name">Last Name</label>
                    <input id="last_name" type="text" class="form-control" name="last_name">
                  </div> --}}
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input id="email" type="email" class="form-control" name="email">
                  <div class="invalid-feedback">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-6">
                    <label for="password" class="d-block">Password</label>
                    <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator"
                      name="password">
                    <div id="pwindicator" class="pwindicator">
                      <div class="bar"></div>
                      <div class="label"></div>
                    </div>
                  </div>
                  <div class="form-group col-6">
                    <label for="password2" class="d-block">Password Confirmation</label>
                    <input id="password2" type="password" class="form-control" name="password-confirm">
                  </div>
                </div>

                <div class="form-group">
                    <label for="email">Roles</label>
                   
                    <select id="inputState" class="form-control" name="role_id">
                        <option selected>Choose...</option>
                         @foreach ($roles as $role)
                        <option>{{$role->name}}</option>
                    @endforeach
                        
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