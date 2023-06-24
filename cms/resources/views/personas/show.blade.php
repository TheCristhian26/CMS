@extends('layouts.base')

@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="d-flex justify-content-center mb-3">
                @if($proyecto->imagen != null)
                <img src="{{ $proyecto->imagen }}" alt="" width="150px" height="150px" style="border: solid 1px #000000">
                @else
                <img src="{{ asset('img/default.png') }}" alt="" width="150px" height="150px" style="border: solid 1px #000000">
                @endif
            </div>
            <h1 class="text-center text-primary mt-3 mb-3">
                {{ $proyecto->nombre }}
            </h1>
            <p class="mb-3">
                {{ $proyecto->descripcion }}
            </p>

            <a href="{{ route('projects.index') }}" class="btn btn-success">Regresar a proyectos</a>
        </div>
    </div>
@endsection