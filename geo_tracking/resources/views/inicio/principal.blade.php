@extends('inicio.index')

@section('Contenido')

<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Geo Tracking</h6>
                </div>
            </div>
            <div class="card-body">
                      <h3>Bienvenidos a Geo_Tracking</h3>
                      <p>¡Bienvenido Administrador Principal! Este es el panel Principal del sistema aca podra encontrar atajos para acceder a los distintos Listados de cada modulo del Sistema</p>
                      <div class="container-fluid py-4">
                        <div class="row">
                              <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                                  <div class="card">
                                      <div class="card-header p-3 pt-2">
                                      <div  class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                          <i class="material-icons opacity-10">person</i>
                                      </div>
                                      <div class="text-end pt-1">
                                          <h6><a class="mb-0" href="?controlador=usuarios&accion=index">Conductores</a></h6>
                                      </div>
                                      </div>
                                      <hr class="dark horizontal my-0">
                                      <div class="card-footer p-3">
                                      <p class="mb-0"><span class="text-success text-sm font-weight-bolder"></span></p>
                                      </div>
                                  </div>
                                  </div>
                                  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                                  <div class="card">
                                      <div class="card-header p-3 pt-2">
                                      <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                          <i class="material-icons opacity-10">table_view</i>
                                      </div>
                                      <div class="text-end pt-1">
                                      <h6><a class="mb-0" href="?controlador=productos&accion=index">Vehiculos</a></h6>
                                      </div>
                                      </div>
                                      <hr class="dark horizontal my-0">
                                      <div class="card-footer p-3">
                                      <p class="mb-0"><span class="text-success text-sm font-weight-bolder"></span></p>
                                      </div>
                                  </div>
                                  </div>
                                  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                                  <div class="card">
                                      <div class="card-header p-3 pt-2">
                                      <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                          <i class="material-icons opacity-10">receipt_long</i>
                                      </div>
                                      <div class="text-end pt-1">
                                      <h6><a class="mb-0" href="?controlador=categoria&accion=index">Empresas</a></h6>
                                      </div>
                                      </div>
                                      <hr class="dark horizontal my-0">
                                      <div class="card-footer p-3">
                                      <p class="mb-0"><span class="text-success text-sm font-weight-bolder"></span></p>
                                      </div>
                                  </div>
                                  </div>
                                  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                                  <div class="card">
                                      <div class="card-header p-3 pt-2">
                                      <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                          <i class="material-icons opacity-10">view_in_ar</i>
                                      </div>
                                      <div class="text-end pt-1">
                                      <h6><a class="mb-0" href="?controlador=provedores&accion=index">Mapa</a></h6>
                                          
                                      </div>
                                      </div>
                                      <hr class="dark horizontal my-0">
                                      <div class="card-footer p-3">
                                      <p class="mb-0"><span class="text-success text-sm font-weight-bolder"></span></p>
                                      </div>
                                  </div>
                                  </div>
                      </div>
                  </div>    
                  </div>
        </div>
    </div>
</div>


@endsection