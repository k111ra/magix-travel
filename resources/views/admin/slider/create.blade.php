@extends('admin.layout.layout')
@section('content')
<div class="container">
    <div class="card" id="add-Destination-card">
        <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="card-header">
                <h4>Ajouter un Slider</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name">Nom:</label>
                            <input type="text" name="nom"  class="form-control" required>
                            @error('nom')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="images">Images</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="images" id="images" required>
                            <label class="custom-file-label" for="customFile">Choisir une image</label>
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
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </form>
    </div>
</div>
@endsection

