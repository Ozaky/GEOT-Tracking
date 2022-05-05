@extends('inicio.index')

@section('Contenido')

<hr>
<br>
<center><h3>Registrar Vehiculos</h3></center>
<center><div class="w-25 border p-4" style="background-color: wheat;">
    <form action="{{ url('vehiculos') }}" method="POST"  enctype="multipart/form-data">
       @csrf

       @if (session()->has('info'))

    <div class="alert alert-success">{{ session('info') }}</div>

      @endif
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre Conductor</label>
            <select name="idconductor" class="form-control"  >
                            
                 @foreach ($conductores as $conductor)
                        
                    <option value="{{ $conductor->Con_id }}">{{ $conductor->Con_nombre }} {{ $conductor->Con_apellido }} </option>;

                @endforeach

                          
                            
            </select>
        
        
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Numero Documento</label>
            <select name="ndocumento" type="number" class="form-control"  >
                            
                 @foreach ($conductores as $conductor)
                        
                    <option value=" {{ $conductor->Con_n_documento }} "> {{ $conductor->Con_n_documento }} </option>;

                @endforeach

                          
                            
            </select>
        
        
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Modelo</label>
            <input type="text" name="modelo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Año</label>
            <input type="number" name="año" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Estado</label>
            <select class="form-control"  name="estado" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <option value="Activo">Activo</option>
                        <option value="Inactivo">Inactivo</option>
             </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Matricula</label>
            <input type="text" name="matricula" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Placa</label>
            <input type="text" name="placa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Soat</label>
            <input type="text" name="soat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tecnomecanica</label>
            <input type="text" name="tecnomecanica" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Cargar Soat</label>
            <input type="file" name="csoat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Cargar Tecnomecanica</label>
            <input type="file" name="ctecno" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Cargar Tarjeta Propiedad</label>
            <input type="file" name="ctpro" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div></center>

@endsection
