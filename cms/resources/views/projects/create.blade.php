@extends('layouts.base')

@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('persona.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido">
                </div>
                <div class="mb-3">
                    <label for="cedula" class="form-label">cedula</label>
                    <input type="text" class="form-control" id="cedula" name="cedula">
                </div>
                <div class="mb-3">
                    <label for="direccion" class="form-label">direccion</label>
                    <input type="text" class="form-control" id="direccion" name="direccion">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        </div>
    </div>
@endsection
