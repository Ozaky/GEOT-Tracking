@extends('inicio.index')

@section('Contenido')
<hr>
<br>
<center><h3>Editar Conductores</h3></center><
<center><div class="w-25 border p-4" style="background-color: wheat;">
    <form action="{{ url('/conductor/'.$conductor->id) }}" method="POST" enctype="multipart/form-data" >
       @csrf

       {{ method_field('PATCH') }}
        
        <div class="mb-3">
            <label for="exampleInputEmail1"  class="form-label">Nombre</label>
            <input type="text" name="Con_nombre" value="{{ $conductor->Con_nombre }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1"  class="form-label">Apellido</label>
            <input type="text" name="Con_apellido" value="{{ $conductor->Con_apellido }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputEmail1"  class="form-label">Telefono</label>
            <input type="number" name="Con_telefono" value="{{ $conductor->Con_telefono }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Direccion</label>
            <input type="text" name="Con_direccion" value="{{ $conductor->Con_direccion }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Estado</label>
            <select class="form-control" value="{{ $conductor->Con_cestado }}" name="Con_estado" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <option value="Activo">Activo</option>
                        <option value="Inactivo">Inactivo</option>
             </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pase</label>
            <input type="text" name="Con_n_pase" value="{{ $conductor->Con_n_pase }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Cargar Pase</label>
            {{ $conductor->Con_c_pase}}
            <input type="file" name="Con_c_pase" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Cedula</label>
            <input type="text" name="Con_n_documento" value="{{ $conductor->Con_n_documento}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Cargar Cedula</label>
            {{ $conductor->Con_c_documento}}
            <input type="file" name="Con_c_documento" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Cargar Hoja de Vida</label>
            {{ $conductor->Con_c_hoja_vida}}
            <input type="file" name="Con_c_hoja_vida" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        
        <button type="submit"  class="btn btn-primary">Actualizar Datos</button>
    </form>
</div></center>

@endsection