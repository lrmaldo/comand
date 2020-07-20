@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-6 col-md-6">
            <div class="card bg-primary text-white mb-6">
                <div class="card-body">Carrusel</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="/carrusel">Ir a la sección</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-6 col-md-6">
            <div class="card bg-success text-white mb-2">
                <div class="card-body">Datos del Negocio</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="/datos">Ir a la sección</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        
    </div>
   
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
           Tabla de productos    <a href="{{ url('home/create') }}"><button class="btn btn-success">Agregar producto</button></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Id</th>
                       
                        <th>Titulo</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Id</th>
                       
                        <th>Titulo</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                      </tr>
                    </tfoot>
                    <tbody>
                    @foreach($productos as $registro)
                      <tr>
                        <td>{{$registro->id}}</td>
                        <td>{{$registro->titulo}}</td>
                        <td>{{$registro->descripcion}}</td>
                        <td>{{$registro->precio}}</td>
                        <td> <img src="{{$registro->url_imagen}}" alt="no se agrego"  class="img-responsive"  width="120" height="120" > 
                        
                        </td>
                        <td> 
                                                  <a href="{{ url('/home/' . $registro->id . '/edit') }}" class="btn btn-info btn-xs"> Editar </a>
                                                          </td>
                       
                      </tr>
                      @endforeach
                      
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
