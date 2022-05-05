@extends('inicio.index')

@section('Contenido')



<hr>
<h3>Listar Vehiculos</h3>
<table class="table align-items-center mb-0">
      <tr>
        <th>Conductor</th>
        <th>Modelo</th>
        <th>Año</th>
        <th>Matricula</th>
        <th>Placa</th>
        <th>Tecnomecanica</th>
        <th>Soat</th>
    </tr>

    @foreach ($vehiculos as $vehiculo)
        <tr>
            <td>{{ $vehiculo->Veh_Con_id }}</td>
            <td>{{ $vehiculo->Veh_modelo }}</td>
            <td>{{ $vehiculo->Veh_año }}</td>
            <td>{{ $vehiculo->Veh_placa }}</td>
            <td>{{ $vehiculo->Veh_matricula }}</td>
            <td>{{ $vehiculo->Veh_soat }}</td>
            <td>{{ $vehiculo->Veh_tecnomecanica }}</td>
        </tr>
    @endforeach
   
</table>



@endsection