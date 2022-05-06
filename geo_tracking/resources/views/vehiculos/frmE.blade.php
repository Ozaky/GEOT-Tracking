@extends('inicio.index')

@section('Contenido')
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Editar Vehiculos</h6>
                </div>
            </div>
            <div class="card-body">


    <form action="{{ url('/vehiculos/'.$vehiculo->id) }}" method="POST" enctype="multipart/form-data">
       @csrf

       {{ method_field('PATCH') }}
        
       <div class="input-group input-group-outline my-3">
            Nombre Conductor
            <select name="Veh_Con_id" class="form-control"  >
                            
                 @foreach ($conductores as $conductor)
                        
                    <option value="{{ $conductor->id }}">{{ $conductor->Con_nombre }} {{ $conductor->Con_apellido }} </option>;

                @endforeach

                          
                            
            </select>
        
        
        </div>

        <div class="input-group input-group-outline my-3">
            Numero Documento
            <select name="Veh_documento" type="number" class="form-control"  >
                            
                 @foreach ($conductores as $conductor)
                        
                    <option value=" {{ $conductor->Con_n_documento }} "> {{ $conductor->Con_n_documento }} </option>;

                @endforeach

                          
                            
            </select>
        
        
        </div>

        <div class="input-group input-group-outline my-3">
            Modelo
            <input type="text" name="Veh_modelo" value="{{ $vehiculo->Veh_modelo }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        
        <div class="input-group input-group-outline my-3">
           Año
            <input type="number" name="Veh_año" value="{{ $vehiculo->Veh_año }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>


        <div class="input-group input-group-outline my-3">
            Estado
            <select class="form-control" value="{{ $vehiculo->Veh_estado }}" name="Veh_estado" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <option value="Activo">Activo</option>
                        <option value="Inactivo">Inactivo</option>
             </select>
        </div>

        <div class="input-group input-group-outline my-3">
            Matricula
            <input type="text" name="Veh_matricula" value="{{ $vehiculo->Veh_matricula }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="input-group input-group-outline my-3">
            Placa
            <input type="text" name="Veh_placa" value="{{ $vehiculo->Veh_placa }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="input-group input-group-outline my-3">
          Soat
            <input type="text" name="Veh_soat" value="{{ $vehiculo->Veh_soat }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="input-group input-group-outline my-3">
           Tecnomecanica
            <input type="text" name="Veh_tecnomecanica" value="{{ $vehiculo->Veh_tecnomecanica}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="input-group input-group-outline my-3">
           Cargar Soat
            
            <input type="file" name="Veh_c_soat" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="input-group input-group-outline my-3">
           Cargar Tecnomecanica
           
            <input type="file" name="Veh_c_t_mecanica" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="input-group input-group-outline my-3">
           Cargar Tarjeta Propiedad
           
            <input type="file" name="Veh_c_t_propiedad" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        
        <button type="submit" class="btn btn-primary">Actualizar Vehiculo</button>
    </form>
          </div>
        </div>
    </div>
</div>

@endsection