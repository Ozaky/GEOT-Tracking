@extends('inicio.index')

@section('Contenido')



<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Conductor</h6>
                </div>
            </div>
            <div class="card-body">
                    <a class="btn btn-primary"  href="{{ url('conductor/create') }}">Registrar Conductor</a>
                    <h2>Listado de Conductores</h2>

                <table class="table align-items-center mb-0">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>No.Pase</th>
                        <th>Acciones</th>
                        
                    </tr>

                    @foreach ($conductores as $conductor)
                        <tr>
                            <td>{{ $conductor->id }}</td>
                            <td>{{ $conductor->Con_nombre }}</td>
                            <td>{{ $conductor->Con_apellido }}</td>
                            <td>{{ $conductor->Con_telefono }}</td>
                            <td>{{ $conductor->Con_direccion }}</td>
                            <td>{{ $conductor->Con_n_pase }}</td>
                            <td> 

                                <a href="{{ url('/conductor/'.$conductor->id.'/edit') }}">
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