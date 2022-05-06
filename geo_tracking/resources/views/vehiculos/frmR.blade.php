@extends('inicio.index')

@section('Contenido')

<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Registar Vehiculos</h6>
                </div>
            </div>
    <form action="{{ url('vehiculos') }}" method="POST"  enctype="multipart/form-data">
       @csrf

       @if (session()->has('info'))

    <div class="alert alert-success">{{ session('info') }}</div>

      @endif
        
      <div class="input-group input-group-outline my-3">
           Nombre Conductor
            <select name="idconductor" class="form-control"  >
                            
                 @foreach ($conductores as $conductor)
                        
                    <option value="{{ $conductor->id }}">{{ $conductor->Con_nombre }} {{ $conductor->Con_apellido }} </option>;

                @endforeach

                          
                            
            </select>
        
        
        </div>

        <div class="input-group input-group-outline my-3">
            Numero Documento
            <select name="ndocumento" type="number" class="form-control"  >
                            
                 @foreach ($conductores as $conductor)
                        
                    <option value=" {{ $conductor->Con_n_documento }} "> {{ $conductor->Con_n_documento }} </option>;

                @endforeach

                          
                            
            </select>
        
        
        </div>

        <div class="input-group input-group-outline my-3">
            Modelo
            <input type="text" name="modelo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        
        <div class="input-group input-group-outline my-3">
           Año
            <input type="number" name="año" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>


        <div class="input-group input-group-outline my-3">
           Estado
            <select class="form-control"  name="estado" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <option value="Activo">Activo</option>
                        <option value="Inactivo">Inactivo</option>
             </select>
        </div>

        <div class="input-group input-group-outline my-3">
           Matricula
            <input type="text" name="matricula" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="input-group input-group-outline my-3">
           Placa
            <input type="text" name="placa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="input-group input-group-outline my-3">
           Soat
            <input type="text" name="soat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3"><div class="input-group input-group-outline my-3">
            Tecnomecanica
            <input type="text" name="tecnomecanica" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="input-group input-group-outline my-3">
            Cargar Soat
            <input type="file" name="csoat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="input-group input-group-outline my-3">
            Cargar Tecnomecanica
            <input type="file" name="ctecno" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="input-group input-group-outline my-3">
            Cargar Tarjeta Propiedad
            <input type="file" name="ctpro" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
            </div>
        </div>
    </div>
</div>


@endsection
