@extends('inicio.index')

@section('Contenido')

<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Registrar Conductores</h6>
                </div>
            </div>
            <div class="card-body">

                <form action="{{ url('conductor') }}" method="POST"  enctype="multipart/form-data">
                @csrf

                @if (session()->has('info'))

                <div class="alert alert-success">{{ session('info') }}</div>

                @endif
                    
                <div class="input-group input-group-outline my-3">
                        Nombre
                        <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="input-group input-group-outline my-3">
                        Apellido
                        <input type="text" name="apellido" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    
                    <div class="input-group input-group-outline my-3">
                        Telefono
                        <input type="number" name="telefono" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="input-group input-group-outline my-3">
                        Direccion
                        <input type="text" name="direccion" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="input-group input-group-outline my-3">
                        Estado
                        <select class="form-control" name="cestado" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <option value="Activo">Activo</option>
                                    <option value="Inactivo">Inactivo</option>
                        </select>
                    </div>

                    <div class="input-group input-group-outline my-3">
                        Pase
                        <input type="text" name="pase" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="input-group input-group-outline my-3">
                    Cargar Pase
                        <input type="file" name="cpase" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="input-group input-group-outline my-3">
                    Cedula
                        <input type="text" name="cedula" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="input-group input-group-outline my-3">
                    Cargar Cedula
                        <input type="file" name="ccedula" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="input-group input-group-outline my-3">
                        Cargar Hoja de Vida
                        <input type="file" name="chojav" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
        </div>
    </div>
</div>

@endsection