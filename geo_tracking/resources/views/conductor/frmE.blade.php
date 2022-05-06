@extends('inicio.index')

@section('Contenido')

<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Editar Conductores</h6>
                </div>
            </div>
            <div class="card-body">

            
                <form action="{{ url('/conductor/'.$conductor->id) }}" method="POST" enctype="multipart/form-data" >
                @csrf

                {{ method_field('PATCH') }}
                    
                <div class="input-group input-group-outline my-3">
                        Nombre:
                        <input type="text" name="Con_nombre" value="{{ $conductor->Con_nombre }}" class="form-control" >
                 </div>

                 <div class="input-group input-group-outline my-3">
                       Apellido:
                        <input type="text" name="Con_apellido" value="{{ $conductor->Con_apellido }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    
                    <div class="input-group input-group-outline my-3">
                        Telefono:
                        <input type="number" name="Con_telefono" value="{{ $conductor->Con_telefono }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="input-group input-group-outline my-3">
                        Direccion:
                        <input type="text" name="Con_direccion" value="{{ $conductor->Con_direccion }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="input-group input-group-outline my-3">
                        Estado:
                        <select class="form-control" value="{{ $conductor->Con_cestado }}" name="Con_estado" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <option value="Activo">Activo</option>
                                    <option value="Inactivo">Inactivo</option>
                        </select>
                    </div>

                    <div class="input-group input-group-outline my-3">
                        Pase
                        <input type="text" name="Con_n_pase" value="{{ $conductor->Con_n_pase }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="input-group input-group-outline my-3">
                        Cargar Pase:
                      
                        <input type="file" name="Con_c_pase" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="input-group input-group-outline my-3">
                      Cedula:
                        <input type="text" name="Con_n_documento" value="{{ $conductor->Con_n_documento}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="input-group input-group-outline my-3">
                        Cargar Cedula:
                        
                        <input type="file" name="Con_c_documento" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="input-group input-group-outline my-3">
                        Cargar Hoja de Vida:
                      
                        <input type="file" name="Con_c_hoja_vida" class="form-control" value="" >
                        </div>
                    
                    <button type="submit"  class="btn btn-primary">Actualizar Datos</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection