@extends('inicio.index')

@section('Contenido')



<hr>
<h3>Lista de Conductores</h3>
<table class="table align-items-center mb-0">
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Telefono</th>
        <th>Direccion</th>
        <th>No.Pase</th>
    </tr>

    @foreach ($conductores as $conductor)
        <tr>
            <td>{{ $conductor->Con_id }}</td>
            <td>{{ $conductor->Con_nombre }}</td>
            <td>{{ $conductor->Con_apellido }}</td>
            <td>{{ $conductor->Con_telefono }}</td>
            <td>{{ $conductor->Con_direccion }}</td>
            <td>{{ $conductor->Con_n_pase }}</td>
        </tr>
    @endforeach
   
</table>



@endsection