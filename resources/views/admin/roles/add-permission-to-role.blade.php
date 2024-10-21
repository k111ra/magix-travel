  @extends('admin.layout.layout')
  @section('content')
  <div class="card">
      <div class="card-header">
          <h4>Liste des Permissions</h4>
      </div>
      <div class="card-body">
          <form action="{{ route('role.assignPermissions', $role->id) }}" method="POST">
              @csrf
              <div class="form-group">
                  <label class="d-block">Liste des Permissions</label>
                  @foreach ($permessions as $permession)
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $permession->name }}" {{ $role->hasPermissionTo($permession->name) ? 'checked' : '' }} id="checkbox{{ $permession->id }}">
                      <label class="form-check-label" for="checkbox{{ $permession->id }}">{{ $permession->name }}</label>
                  </div>
                  @endforeach
              </div>
              <button type="submit" class="btn btn-primary">Assigner les Permissions</button>
          </form>
      </div>

  </div>

  @endsection

