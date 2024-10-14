@extends('admin.layout.layout')
@section('content')
<style>
    .selected-row {
        background-color: rgb(241, 180, 105);
        /* Couleur de fond pour les lignes sélectionnées */
    }

</style>
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <h4>Liste des slider</h4>
            <a href="{{ route('slider.create') }}" class="btn btn-success btn-sm">Nouveau</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Date Création</th>
                        <th width="100px">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sliders as $slider)
                    <tr style="cursor: pointer;" onclick="selectRow(this)">
                        <td>{{ $loop->iteration }}</td>
                        <td style="padding: 10px;">
                            <img src="{{ asset('storage/' . $slider->images) }}" alt="Slider" style="width: 70px; height: 70px;">
                        </td>
                        <td>{{ $slider->nom }}</td>
                        <td>{{ $slider->description }}</td>
                        <td>
                            @if ($slider->status === 'activé')
                                <span class="badge badge-success">Activé</span>
                            @else
                                <span class="badge badge-danger">Désactivé</span>
                            @endif
                        </td>
                        <td>{{ $slider->created_at }}</td>
                        <td>
                            <a href="{{ route('slider.edit', $slider->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('slider.destroy', $slider->id) }}" method="post" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce Slider ?')">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

