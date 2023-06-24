@extends('layouts.test')

@section('content')

    <div class="row d-flex justify-content-center">
    <div class="row mt-3 mb-3">
        <div class="col-md-2 offset-md-2">
            <a href="{{ route('personas.create') }}" class="btn btn-primary">Nuevo proyecto</a>
        </div>
    </div>
    <div class="col-md-10">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>apellido</td>
                    <td>cedula</td>
                    <td>Direccion</td>
                    <td>Acciones</td>
                    <td>Imagen</td>
                    <td>password</td>
                    <td>Tipo de persona </td>
                </tr>
            </thead>
            <tbody>
                @foreach ($persona as $personas )
                    <tr>
                        <td>
                            {{ $persona->id }}
                        </td>
                        <td>
                            {{ $persona->name }}
                        </td>
                        <td>
                            {{ $persona->apellido }}
                        </td>
                        <td>
                            {{ $persona->cedula }}
                        </td>
                        <td>
                            {{ $persona->direccion }}
                        </td>
                        <td>
                            {{ $persona->password }}
                        </td>
                        <td>
                            {{ $persona->tipo_persona_id }}
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