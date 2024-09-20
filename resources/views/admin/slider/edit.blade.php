@extends('admin.layout.layout')
@section('content')
@php
$status = ["activé", "désactivé"];
@endphp
<div class="container">
    <h1>Modifier un slider</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('slider.update', $slider->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- Add form fields for editing destination details -->
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="nom">Nom:</label>
                            <input type="text" name="nom" id="nom" class="form-control" value="{{ $slider->nom }}">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <label for="images">Images</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" value="{{ $slider->images }}" name="images" id="images">
                            <label class="custom-file-label" for="customFile">Choisir une image</label>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <label for="images">Status</label>
                            <select name="status" class="form-control" id="status">
                                @foreach ($status as $status)
                                    <option value="{{ $status }}" {{ old('status',  $slider->status) == $status ? 'selected' : '' }}>{{ $status }}</option>
                                @endforeach
                            </select>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea name="description" id="description" class="form-control" required>{{ $slider->description }}</textarea>
                            @error('description')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                        <a href="{{ route('slider.index') }}" class="btn btn-secondary">Annuler</a>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
@endsection

