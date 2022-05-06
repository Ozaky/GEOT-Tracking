@extends('inicio.index')

@section('Contenido')

<hr>
<br>
<center><h3>Editar Vehiculos</h3></center>
<center><div class="w-25 border p-4" style="background-color: wheat;">
    <form action="{{ url('/vehiculos/'.$vehiculo->id) }}" method="POST" enctype="multipart/form-data">
       @csrf

       {{ method_field('PATCH') }}
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre Conductor</label>
            <select name="Veh_Con_id" class="form-control"  >
                            
                 @foreach ($conductores as $conductor)
                        
                    <option value="{{ $conductor->id }}">{{ $conductor->Con_nombre }} {{ $conductor->Con_apellido }} </option>;

                @endforeach

                          
                            
            </select>
        
        
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Numero Documento</label>
            <select name="Veh_documento" type="number" class="form-control"  >
                            
                 @foreach ($conductores as $conductor)
                        
                    <option value=" {{ $conductor->Con_n_documento }} "> {{ $conductor->Con_n_documento }} </option>;

                @endforeach

                          
                            
            </select>
        
        
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Modelo</label>
            <input type="text" name="Veh_modelo" value="{{ $vehiculo->Veh_modelo }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Año</label>
            <input type="number" name="Veh_año" value="{{ $vehiculo->Veh_año }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Estado</label>
            <select class="form-control" value="{{ $vehiculo->Veh_estado }}" name="Veh_estado" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <option value="Activo">Activo</option>
                        <option value="Inactivo">Inactivo</option>
             </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Matricula</label>
            <input type="text" name="Veh_matricula" value="{{ $vehiculo->Veh_matricula }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Placa</label>
            <input type="text" name="Veh_placa" value="{{ $vehiculo->Veh_placa }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Soat</label>
            <input type="text" name="Veh_soat" value="{{ $vehiculo->Veh_soat }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tecnomecanica</label>
            <input type="text" name="Veh_tecnomecanica" value="{{ $vehiculo->Veh_tecnomecanica}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Cargar Soat</label>
            {{ $vehiculo->Veh_c_soat }}
            <input type="file" name="Veh_c_soat" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Cargar Tecnomecanica</label>
            {{ $vehiculo->Veh_c_t_mecanica }}
            <input type="file" name="Veh_c_t_mecanica" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Cargar Tarjeta Propiedad</label>
            {{ $vehiculo->Veh_c_t_propiedad }}
            <input type="file" name="Veh_c_t_propiedad" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        
        <button type="submit" class="btn btn-primary">Actualizar Vehiculo</button>
    </form>
</div></center>

@endsection