@extends('admin.layout.layout')
@section('content')
<div class="container">
    <div class="card" id="add-hotel-card">
        <form action="{{ route('hotels.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="card-header">
                <h4>Ajouter un Hotel</h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="name">Nom:</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-4">

                        <div class="form-group">
                            <label for="localisation">Localisation:</label>
                            <input type="text" name="localisation" id="localisation" class="form-control" required>
                            @error('localisation')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-4">

                        <div class="form-group">
                            <label for="etoiles">Etoiles:</label>
                            <input type="number" min="0" name="etoiles" id="etoiles" class="form-control" required>
                            @error('etoiles')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror

                        </div>
                    </div>
                    <div class="col-sm-6">

                        <!-- Group 2 -->
                        <div class="form-group">
                            <label for="prix">Prix:</label>
                            <input type="number" min="0" name="prix" id="prix" class="form-control" required>
                            @error('prix')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                        <!-- Add other fields based on your migration -->

                        <!-- Common Group -->
                        <div class="form-group">
                            <label for="images">Images:</label>
                            <input type="file" name="images[]" id="images" multiple accept="image/*" class="form-control-file">
                            @error('images[]')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
             </div>

        
        
          <div class="col-sm-12">
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control" required></textarea>
                @error('description')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            
            </div>
        </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Ajouter l'Hotel</button>
            </div>
        </form>
    </div>
</div>
@endsection