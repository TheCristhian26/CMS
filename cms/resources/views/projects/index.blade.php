@extends('layouts.base')

@section('content')

<div class="row d-flex justify-content-center">
    <div class="row mt-3 mb-3">
        <div class="col-md-2 offset-md-2">
            <a href="{{ route('projects.create') }}" class="btn btn-primary">Nuevo proyecto</a>
        </div>
    </div>
    <div class="col-md-10">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Imagen</td>
                    <td>Nombre</td>
                    <td>Descripción</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($proyectos as $proyecto)
                    <tr>
                        <td>
                            {{ $proyecto->id }}
                        </td>
                        <td>
                            @if($proyecto->imagen != null)
                            <img src="{{ $proyecto->imagen }}" alt="" width="30px" height="30px">
                            @else
                            <img src="{{ asset('img/default.png') }}" alt="" width="30px" height="30px">
                            @endif
                        </td>
                        <td>
                            {{ $proyecto->nombre }}
                        </td>
                        <td>
                            {{ $proyecto->descripcion }}
                        </td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('projects.show',['project' => $proyecto->id]) }}" class="btn btn-success">Detalle</a>
                                <a href="{{ route('projects.edit',['project' => $proyecto->id]) }}" class="btn btn-warning" style="margin-left: 10px">Editar</a>
                                <a href="{{ route('projects.delete',['project'=>$proyecto->id]) }}" class="btn btn-danger" style="margin-left: 10px">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection