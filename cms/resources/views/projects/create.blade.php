@extends('layouts.base')

@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('projects.store') }}" method="POST">
                @csrf
                <div class="d-flex justify-content-center">
                    <img id="imagen" src="{{ asset('img/default.png') }}" alt="" width="150px" height="150px" style="border: solid 1px #000000">
                    <input type="file" id="input_imagen" class="d-none">
                    <textarea name="imagen" id="imagen_texto" cols="30" rows="10" class="d-none"></textarea>
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
                    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        </div>
    </div>
@endsection

@section('scripts')

<script>
    var imagen = document.getElementById('imagen');
    var input_imagen = document.getElementById('input_imagen');
    var imagen_texto = document.getElementById('imagen_texto');
    imagen.addEventListener('click',function(){
        input_imagen.click();
    });
    input_imagen.addEventListener('change',function(){
        var file = this.files[0];
        var sizebyte = this.files[0].size;
        var sizekilobyte = parseInt(sizebyte / 1024);
        if (sizekilobyte > 4096) {
            alert('La imagen excede el tamaño permitido de 4 MB');
        } else {
            var reader = new FileReader();
            reader.onloadend = function() {
                document.getElementById("imagen").src = reader.result;
                document.getElementById("imagen_texto").value = reader.result;
            }
            reader.readAsDataURL(file);
        }
    });
</script>

@endsection