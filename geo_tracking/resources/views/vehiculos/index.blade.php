@extends('inicio.index')

@section('Contenido')



<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Vehiculos</h6>
                </div>
            </div>
            <div class="card-body">
                    <a class="btn btn-primary"  href="{{ url('vehiculos/create') }}">Registrar Vehiculo</a>
                    <h2>Listado de Vehiculos</h2>
            <table class="table align-items-center mb-0">
                <tr>
                    <th>Conductor</th>
                    <th>Modelo</th>
                    <th>Año</th>
                    <th>Matricula</th>
                    <th>Placa</th>
                    <th>Tecnomecanica</th>
                    <th>Soat</th>
                    <th>Acciones</th>
                    
                </tr>

                @foreach ($vehiculos as $vehiculo)
                    <tr>
                        <td>{{ $vehiculo->id }}</td>
                        <td>{{ $vehiculo->Veh_modelo }}</td>
                        <td>{{ $vehiculo->Veh_año }}</td>
                        <td>{{ $vehiculo->Veh_placa }}</td>
                        <td>{{ $vehiculo->Veh_matricula }}</td>
                        <td>{{ $vehiculo->Veh_soat }}</td>
                        <td>{{ $vehiculo->Veh_tecnomecanica }}</td>
                        <td>
                            
                        <a href="{{ url('/vehiculos/'.$vehiculo->id.'/edit') }}">
                            Editar
                            </a>

                        </td>
                    </tr>
                @endforeach
            
            </table>
            </div>
        </div>
    </div>
</div>


            @endsection