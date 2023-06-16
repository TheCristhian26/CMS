@extends('layouts.base')

@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <h3 class="text-center">
                ¿Está seguro de eliminar el registro?
            </h3>
            <form action="{{ route('projects.destroy',['project'=>$proyecto->id]) }}" method="POST">
                @method('delete')
                @csrf
                <div class="d-flex justify-content-center">
                    <a href="{{ route('projects.index') }}" class="btn btn-success">Regresar</a>
                    <button type="submit" class="btn btn-danger" style="margin-left:10px">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
@endsection