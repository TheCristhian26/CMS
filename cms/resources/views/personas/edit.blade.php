@extends('layouts.base')

@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('projects.update',['project' => $proyecto->id]) }}" method="POST">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $proyecto->nombre }}">
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10">{{ $proyecto->descripcion }}</textarea>
                    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                </div>
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </form>
        </div>
    </div>
@endsection